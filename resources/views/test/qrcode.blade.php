<div class="visible-print text-center">
    {{--{!! QrCode::format('png')->mergeString(Storage::get('images/tealinux-line-icon.png'), .3)->generate(); !!}--}}
    <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(300)->errorCorrection('H')->merge('http://4.bp.blogspot.com/-EbQ1M6OD5mE/VVVAR3XpSbI/AAAAAAAAAPQ/t2pdqljMomU/s80-c/tealinuxos2.png', .25, true)->generate('http://tealinuxos.org/')) !!} ">
    <p>Scan me to return to the original page.</p>
</div>