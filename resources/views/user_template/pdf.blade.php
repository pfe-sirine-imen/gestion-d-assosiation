<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF Download</title>
    <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even) {
          background-color: #dddddd;
        }
        </style>
</head>
<body>
    <table>
        <tr>
            <th>Titre de reunion</th>
            <th>Les listes d’invités des reunions</th>
            <th>E-mail(s) pour invités de reunion</th>
            <th>Date de reunion</th>
            <th>Heure de  reunion</th>
            <th>place de reunion </th>
        </tr>
        @if(count($reunion))
           @foreach ( $reunion as $reunion)
        <tr>
            <td>{{ $reunion->titre }}</td>
            <td>{{  $reunion->invite }}</td>
            <td>{{ $reunion->mail  }}</td>
            <td>{{ $reunion->date  }}</td>
            <td>{{ $reunion->heure  }}</td>
            <td>{{ $reunion->place  }}</td>
        </tr>
           @endforeach
        @else
       <tr>
        <td>no reunion found</td>
        
      </tr>
       @endif
      </table>
      
       
</body>
</html>