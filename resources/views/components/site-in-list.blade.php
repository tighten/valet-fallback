<li class="ml-6">
    <strong>{{ $site->name() }}</strong>
    @if ($site->minimumPhpVersion())
    (PHP {{ $site->minimumPhpVersion() }})
    @endif
    <ul class="list-disc">
    @foreach ($site->links() as $link)
        <li class="ml-6">
        <a href="{{ $link->url() }}" class="underline text-blue-500">{{ $link->name() }}</a>
        {{--
    @if (! $link->secured())
        <a href="{{ route('sites.secure', $link->name()) }}" class="text-blue-500 underline">Secure</a>
    @endif
        --}}
        </li>
    @endforeach
    </ul>
    @switch ($site::driver())
        @case('LaravelValetDriver')
            Laravel:<br>
            <ul class="list-disc ml-6">
                <li>Laravel Version: {{ $site->laravelVersionConstraint() }}</li>
                <li>DB creds or link or something</li>
                <li>Open with your fav editor</li>
            </ul>
        @break
    @endswitch
</li>
