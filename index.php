<?php
require __DIR__ . '/vendor/autoload.php';
use bjjnts\Service;

/*
// 多用户学习
$userList = [
    ['username' => '', 'password' => ''],
    ['username' => '', 'password' => ''],
    ['username' => '', 'password' => ''],
];

// 循环实例化
foreach ($userList as $user) {
    $service[$user['username']] = new Service($user['username'], $user['password']);
}

// 循环执行
while (true) {
    foreach ($userList as $user) {
        $taskList[$user['username']] = $service[$user['username']]->getTaskList();
        run($taskList[$user['username']], $service[$user['username']]);
    }
    sleep(61);
}
*/

// 单用户学习
$username = '';
$password = '';

// 实例化
$service = new Service($username, $password);

// 循环执行
while (true) {
$taskList = $service->getTaskList();
run($taskList, $service);
sleep(61);
}

function run($taskList, $service)
{
    if (!$taskList || $service->getFinish()) {
	    $service->log('All task is finished!');
        return;
    }

    if ($taskList[0]['time'] == $taskList[0]['progress_time']) {
        array_shift($taskList);
        run($taskList, $service);
    } else {
        $time = 60;
        if ($taskList[0]['progress_time'] == 0) {
            $time = 0;
        }
        if ($taskList[0]['progress_time'] == 1) {
            $time = 59;
        }
        $isEnd = false;
        if ($taskList[0]['time'] - $taskList[0]['progress_time'] < 60) {
            $isEnd = true;
            $time  = $taskList[0]['time'] - $taskList[0]['progress_time'];
        }

        $res = $service->studies($taskList[0]['class_id'], $taskList[0]['course_id'], $taskList[0]['unit_id'], $taskList[0]['video_id'], $taskList[0]['progress_time'] + $time, $isEnd);

        $service->log('Task is ==> '.json_encode($taskList[0], JSON_UNESCAPED_UNICODE));

        // 正常返回
        if (!$res || !empty($res['id'])) {
            $taskList[0]['progress_time'] += $time ?: 1;
            $service->setTaskList($taskList);
        }
        // 学习进度错误
        elseif (!empty($res['code']) && $res['code'] == 3001) {
            // 错误3次重置学习列表
            if ($service->getErrorCount() >= 3) {
                $service->clearTaskList();
            } else {
                $service->setErrorCount();
            }
        }
        // 学习时间限制
        elseif (!empty($res['code']) && $res['code'] == 3003) {
            $service->setFinish();
        }

        return $res;
    }
}
