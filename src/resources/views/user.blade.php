@foreach ($users as $user)
    <h1>Your name is {{ $user->name }} . Your mail address sis {{ $user->email }}</h1>
@endforeach