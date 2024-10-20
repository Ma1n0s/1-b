<x-layout>
    <form method="post" action="{{ route('user.RegisterComp') }}" >
        @csrf
        <div class="form">
            <h1>Регистрация</h1>
            <input type="text" name="name" placeholder="Имя">
            <input type="text" name="name" placeholder="Имя">
            <input type="text" name="name" placeholder="Имя">
            <input type="text" name="email" placeholder="Почта">
            <button type="submit" name="submit">Зарегестрироваться</button>
            <a href="{{ route('login') }}">Вход</a>
        </div>
    </form>
</x-layout>