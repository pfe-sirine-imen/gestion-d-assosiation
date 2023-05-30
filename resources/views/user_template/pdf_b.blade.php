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
            
            <th>Titre de evenement</th>
            <th>Responsable de evenement</th>
            <th>date debut de evenement</th>
            <th>date fin de evenement</th>
            <th>lieu de evenement</th>
            <th>Budget de evenement</th>
            <th>L'objectif de evenement</th>
        </tr>
        @if(count($evens))
        
        @foreach ( $evens as $even)

        <tr>
           
            <td>{{ $even->titre }}</td>
            <td>{{ $even->responsable }}</td>
            <td>{{ $even->date_debut  }}</td>
            <td>{{ $even->date_fin  }}</td>
            <td>{{ $even->lieu  }}</td>
            <td>{{ $even->budget  }}</td>
            <td>{{ $even->objectif  }}</td>
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