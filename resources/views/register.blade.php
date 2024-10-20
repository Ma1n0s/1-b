<x-layout>
    <form method="post" action="{{ route('user.register') }}" >
        @csrf
        <div class="form">
            <h1>Регистрация</h1>
            <input type="text" name="email" placeholder="Почта">
            <input type="text" name="name" placeholder="Имя">
            <input type="password" name="password" placeholder="Пароль">
            <button type="submit" name="submit">Зарегестрироваться</button>
            <a href="{{ route('login') }}">Вход</a>
        </div>
    </form>
</x-layout>