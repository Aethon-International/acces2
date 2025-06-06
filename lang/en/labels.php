<?php

return [
    'nav' => [
        'group' => [
            'management' => 'Management',
            'settings' => 'Settings',
            'passwords' => 'Passwords',
            'password' => 'Account',

        ],

        'user_menu' => [
            'lock_screen' => 'Lock Screen',
            'settings' => 'Edit Profile'
        ],
        'dashboard' => 'Dashboard',
    ],

    'users' => [
        'list' => 'Users',
        'create' => 'Create User',
        'edit' => 'Edit User',
    ],


    'type' => [
        'waiting' => 'Waitntig',
        'approve' => 'Approved',
        'normal' => 'Normal',
    ],

    'notify' => [
        'activate' => 'User account has been activated',
        'deactivate' => 'User account has been deactivated',
    ],


    'user_notification' => [
        'timeoff_request' => [
            'request_title' => ':user has submitted a new request!',
            'view_request' => 'View Request',

            'no_more_timeoff_title' => 'Maximum Timeoff request',
            'no_more_timeoff_body' => 'Unable to process timeoff request due to maximum Timeoff requests reached for this year.',

            'status' => [
                'approved' => 'Approved',
                'rejected' => 'Rejected',
                'forward' => 'Forwarded',
            ],
            'response_title' => 'Request **#:id** has been **:status**!',
            'response_body' => 'Your request has been **:status**. Click the _view response_ to check it out.',
            'view_response' => 'View Response',
        ],
        'monthly_salary' => [
            'title' => 'Monthly Salary List Review',
            'body' => 'Monthly salary review is forwarded to all :permissions!',
            'view' => 'View Monthly Salary List',
        ],
    ],

    'logs' => [
        'notify' => [
            'title' => 'Something went wrong!',
            'message' => 'An error has been occurred. Please inform your supervisor regarding this matter.',
        ],
    ],

    'errors' => [
        'back_to_home' => 'Click go back to home page',
        'default' => [
            'title' => 'Bad Request',
            'page_title' => 'Bad Request!',
            'description' => 'Something went wrong. If this occurs more than usual, plesae inform your supervisor regarding this issue.',
        ],
        '401' => [
            'title' => '401 Unauthorized',
            'page_title' => '401 Unauthorized Access!',
            'description' => 'Login with your credentials to access this page.',
        ],
        '403' => [
            'title' => '403 Forbidden',
            'page_title' => '403 Access is forbidden',
            'description' => 'You don\'t have proper permission to access this page.',
        ],
        '404' => [
            'title' => '404 Not Found',
            'page_title' => '404 Page Not Found!',
            'description' => 'The page you were trying to reach couldn\'t be found. Make sure you have entered a valid URL.',
        ],
        '500' => [
            'title' => '500 Server Error',
            'page_title' => '500 Internal Server Error!',
            'description' => 'The server couldn\'t be reached. Please contact your supervisor regarding this matter.',
        ],
        '503' => [
            'title' => '503 Maintenance',
            'page_title' => '503 Service is Under Maintenance!',
            'description' => 'Please wait until the maintenance is done.',
        ],
    ],

];
