<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
</head>
<body>
    @foreach ($tasks as $task)
    	<li><a href="/tasks/{{$task->id}}" >
    		{{$task->body}}
    	</a></li>
    @endforeach	

    <style>
    	li{list-style: none;}
    </style>
</body>
</html>