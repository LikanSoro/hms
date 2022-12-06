@php( $bookings = App\Models\booking::all() ) 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body> 

<select class="form-control" name="owner_name" id="owner_name">                           
    @foreach($bookings as $booking)
      <option value="{{ $booking->id }}">{{ $booking->username }}</option>
    @endforeach                            
</select> 
</body>
</html>