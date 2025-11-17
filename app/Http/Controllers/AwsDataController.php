<?php

namespace App\Http\Controllers;

use Aws\DynamoDb\DynamoDbClient;
use Illuminate\Http\Request;

class AwsDataController extends Controller
{
    public function getSensorData()
    {
        try {
            // Create DynamoDB client
            $dynamodb = new DynamoDbClient([
                'region'  => env('AWS_DEFAULT_REGION'),
                'version' => 'latest',
                'credentials' => [
                    'key'    => env('AWS_ACCESS_KEY_ID'),
                    'secret' => env('AWS_SECRET_ACCESS_KEY'),
                ],
            ]);

            // Query data from table
            $result = $dynamodb->scan([
                'TableName' => env('AWS_DYNAMODB_TABLE'),
            ]);

            // Convert AWS Formats to normal PHP values
            $items = [];
            foreach ($result['Items'] as $item) {
                $items[] = [
                    'device_id'    => $item['device_id']['S'] ?? '',
                    'timestamp'    => $item['timestamp']['S'] ?? '',
                    'ph'           => isset($item['ph']['N']) ? floatval($item['ph']['N']) : null,
                    'ec'           => isset($item['ec']['N']) ? floatval($item['ec']['N']) : null,
                    'water_level'  => isset($item['water_level']['N']) ? floatval($item['water_level']['N']) : null,
                ];
            }

            return view('sensor', ['data' => $items]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
