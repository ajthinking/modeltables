<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- DataTables -->
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <title>ModelTables/{{ $selectedModel->slug }}</title>

    </head>
    <body style="margin: 40px">
        <div class="">            
            <a href="/models/{{ $selectedModel->slug }}">
                <button type="button" class="btn btn-success"> Refresh</button>
            </a>
            @foreach($models as $model)
                <a href="/models/{{ $model->slug }}">
                    <button type="button" class="btn btn-primary">{{ $model->slug }}</button>
                </a>
            @endforeach
        </div>
        <hr>

        @if(!$selectedModel->empty())
        <table class="table table-bordered" id="{{ $selectedModel->slug }}-table">
            <thead>
                <tr>
                    @foreach($selectedModel->publicAttributes() as $attribute)
                        <th>{{ $attribute }}</th>    
                    @endforeach
                    
                </tr>
            </thead>
        </table>
        <script>
            $(function() {
                $('#{{ $selectedModel->slug }}-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '/models/{{ $selectedModel->slug }}/data',
                    columns: [
                        @foreach($selectedModel->publicAttributes() as $attribute)
                            { data: '{{ $attribute }}', name: '{{ $attribute }}' },    
                        @endforeach
                    ]
                });
            });
        </script>
        @else
            <p> No data yet for this model </p>
        @endif   
    </body>
</html>
