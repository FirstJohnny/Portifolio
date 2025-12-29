@if($type === 'grid')
<div class="cyber-grid"></div>
@elseif($type === 'stream')
<div class="data-stream" id="dataStream"></div>
@elseif($type === 'scan')
<div class="cyber-scan" id="cyberScan"></div>
@endif
