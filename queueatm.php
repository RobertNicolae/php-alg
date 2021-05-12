<?php

class AtmClient
{
    public int $index;
    public int $money;

    public function __construct(int $index, int $money)
    {
        $this->index = $index;
        $this->money = $money;
    }

}

/**
 * @param int $l
 * @param AtmClient[] $atmClients
 * @return array
 */


function solve(int $l, array $atmClients): array
{
    $queue = new SplQueue();
    $exit = [];


    foreach ($atmClients as $atmClient) {
        $queue->enqueue($atmClient);

    }
    while (!$queue->isEmpty()) {
        /**
         * @var AtmClient $client
         */
        $client = $queue->dequeue();
        if($client->money > $l) {
            $client->money -= $l;
            $queue->enqueue($client);
        } else {
            $exit[] = $client->index;
        }


    }
    return $exit;
}

$testCases = [
    [
        'n' => 3,
        'l' => 3,
        'm' => [2, 7, 4]
    ],
    [
        'n' => 5,
        'l' => 6,
        'm' => [9, 10, 4, 7, 2]
    ]
];

$results = [];
foreach ($testCases as $testCase) {
    $atmClients = [];
    foreach ($testCase['m'] as $i => $money) {
        $atmClients[] = new AtmClient($i + 1, $money);
    }
    $results[] = implode(' ', solve($testCase['l'], $atmClients));
}

foreach ($results as $i => $result) {
    echo "Case #" . ($i + 1) . ": " . $result . "\n";
}






