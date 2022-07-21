<!DOCTYPE html>
<html>
<head>
    <title>Demo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<style>
    ul {
  list-style: none;
  padding: 0;
}
li {
  padding-left: 1.3em;
}
li:before {
  content: "\f00c"; /* FontAwesome Unicode */
  font-family: FontAwesome;
  display: inline-block;
  margin-left: -1.3em; /* same as padding-left set on li */
  width: 1.3em; /* same as padding-left set on li */
}
</style>
</head>
<body>
    <div class="container">     
            
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Entry</h1>
                        
                        <ul id="tree1">
                            @foreach($entrys as $entry)
                                <li>
                                    {{ $entry->test->name }}
                                    @if(count($entry->childs))
                                        @include('child',['childs' => $entry->childs])
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                   



                </div>

                
        </div>
    </div>
    <script src="/demo.js"></script>
</body>
</html>
