<div {{ $attributes->merge($getExtraAttributes())->class(['px-4 py-3 filament-currator-tables-thumbnail-column']) }}>
    @php
        $height = $getHeight();
        $width = $getWidth() ?? ($isRounded() ? $height : null);
    @endphp

    <div style="
            {!! $height !== null ? "height: {$height};" : null !!}
            {!! $width !== null ? "width: {$width};" : null !!}
        "
        @class(['rounded-full overflow-hidden' => $isRounded()])
    >
        @if (str($getType())->contains('image'))
            <img src="{{ $getImagePath() }}"
                style="
                    {!! $height !== null ? "height: {$height};" : null !!}
                    {!! $width !== null ? "width: {$width};" : null !!}
                "
                @class(['object-cover object-center' => $isRounded()])
                {{ $getExtraImgAttributeBag() }}>
        @else
            <x-filament-curator::document-image label="{{ $getImagePath() }}"
                icon-size="sm" />
        @endif
    </div>
</div>
