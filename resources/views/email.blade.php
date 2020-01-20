<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
    }
    #app{
        width: 100vw;
        display: flex;
        justify-content: center;
    }
    #container{
        width: 400px;
        background: whitesmoke;
        border: gray;
        padding: 20px;
        margin-top: 30px;
    }
    #header{
        padding: 10px;
        display: flex;
        justify-content: center;
    }
    .label{
        text-align: center;
    }
    table{
        border-collapse: collapse;
        margin-right: auto;
        margin-left: auto;
    }
    td, th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2;}

    tr:hover {background-color: #ddd;}

    th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }
</style>
<div id="app">
    <div id="container">
        <div class="label">
            Add your email to list:
        </div>
        <div id="header">
            <form method="post" action="{{ route('email.store') }}">
                @csrf
                <input type="text" placeholder="Name" name="name"/>
                <input type="text" placeholder="Email" name="email"/>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
            @foreach($emails as $email)
            <tr>
                <td>{{$email->id}}</td>
                <td>{{$email->name}}</td>
                <td>{{$email->email}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>