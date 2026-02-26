@props(['subtitle' => null, 'centered' => true, 'light' => false])

<div class="{{ $centered ? 'text-center' : '' }} max-w-3xl {{ $centered ? 'mx-auto' : '' }} mb-12 lg:mb-16">
    @if ($subtitle)
        <p class="inline-block text-sm font-semibold tracking-wider uppercase mb-3
                  {{ $light ? 'text-accent-light' : 'text-accent dark:text-accent-light' }}">
            {{ $subtitle }}
        </p>
    @endif
    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight
              {{ $light ? 'text-white' : 'text-neutral-900 dark:text-white' }}">
        {{ $slot }}
    </h2>
</div>
