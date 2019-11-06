<a href="{{ route('users.show', $user->id) }}">
    {{ $user->name }} {{ $user->email }}
    <img src="{{ $user->gravatar('140')}}" alt="{{ $user->name }}" class="gravatar">
</a>
