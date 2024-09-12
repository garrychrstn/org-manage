<div
    class="nav-menu fixed w-4/5 bg-yellow-300 px-6 py-4 rounded-md flex justify-between items-center left-0 right-0 bottom-5 m-auto">
    <div class="handle">
        <p>{{ $handle->divisi }} | {{ $handle->name }}</p>
    </div>
    <ul class='flex justify-around w-1/4'>
        <li>calendar</li>
        <li>todos</li>
        <li>
            <form action='/logout' method='post'>
                @csrf
                <button action='/logout'>logout</button>
            </form>
        </li>
    </ul>
</div>
