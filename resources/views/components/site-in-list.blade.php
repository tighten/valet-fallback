<h3 class="text-lg font-semibold px-6">{{ $site->name() }}
    <span class="text-base font-normal">
        @if ($site->minimumPhpVersion())
            :: PHP <code class="text-sm">{{ $site->minimumPhpVersion() }}</code>
        @endif
        @if ($site::driver() === 'LaravelValetDriver')
            :: Laravel <code class="text-sm">{{ $site->laravelVersionConstraint() }}</code>
        @endif
    </span>
</h3>
<div>
    <ul class="list-disc ml-8 px-6">
    @foreach ($site->links() as $link)
        <li>
        <a href="{{ $link->url() }}" class="underline text-purple-800 font-semibold">{{ $link->name() }}</a>
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
            <div class="border-t border-gray-200 my-6"></div>
            <div class="px-6">
                <span class="font-semibold text-red-400">Laravel</span><br>
                <ul class="list-disc ml-8">
                    <li>Laravel Version: <code class="text-sm">{{ $site->laravelVersionConstraint() }}</code></li>
                    <li>DB creds or link or something</li>
                    <li>Open with your fav editor</li>
                </ul>
            </div>
        @break
    @endswitch
</div>
