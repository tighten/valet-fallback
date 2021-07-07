<h3 class="px-6 font-semibold text-lg">{{ $site->name() }}
    <span class="font-normal text-base">
        @if ($site->minimumPhpVersion())
            :: PHP <code class="text-sm">{{ $site->minimumPhpVersion() }}</code>
        @endif
        @if ($site::driver() === 'LaravelValetDriver')
            :: Laravel <code class="text-sm">{{ $site->laravelVersionConstraint() }}</code>
        @endif
    </span>
</h3>
<div>
    <ul class="ml-8 px-6 list-outside list-disc">
    @foreach ($site->links() as $link)
        <li class="text-purple-700">
        <a href="{{ $link->url() }}" class="font-semibold text-purple-700 underline">{{ $link->name() }}</a>
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
            <div class="my-6 border-gray-200 border-t"></div>
            <div class="px-6">
                <span class="font-normal font-semibold text-red-400">Laravel</span><br>
                <ul class="ml-8 list-disc text-sm">
                    <li>Laravel Version: <code>{{ $site->laravelVersionConstraint() }}</code></li>
                    <li>DB creds or link or something</li>
                    <li>Open with your fav editor</li>
                </ul>
            </div>
        @break
    @endswitch
</div>
