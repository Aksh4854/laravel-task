<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Hierarchy</title>
    <style>
        /* Reset to default styles */
        ul {
            list-style-type: disc; /* Default bullet style */
            padding-left: 40px; /* Default indentation */
        }

        li {
            margin: 5px 0; /* Optional: Add space between items */
        }
    </style>
</head>
<body>
    <h1>Employee Hierarchy</h1>

    <ul>
        @foreach ($hierarchy as $employee)
            <li>
                {{ $employee['name'] }}
                @if(count($employee['subordinates']) > 0)
                    <ul>
                        @foreach ($employee['subordinates'] as $subordinate)
                            <li>
                                {{ $subordinate['name'] }}
                                @if(count($subordinate['subordinates']) > 0)
                                    <ul>
                                        @foreach ($subordinate['subordinates'] as $subSubordinate)
                                            <li>{{ $subSubordinate['name'] }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>
</body>
</html>
