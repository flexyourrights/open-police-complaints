<!-- resources/views/vendor/openpolice/nodes/1961-public-partner-header.blade.php -->
<p>&nbsp;</p>
<div class="row">
    <div class="col-lg-3 col-md-4">
        <div id="partImg" class="hugTmbRoundDiv">
            <img border=0 src="{!! ((isset($dat['partners'][0]->part_photo_url)
                && trim($dat['partners'][0]->part_photo_url) != '') 
                ? $dat['partners'][0]->part_photo_url
                : '/openpolice/uploads/avatar-group-shell.png') !!}" >
        </div>
    </div><div class="col-lg-9 col-md-8">
        <div id="partTtl">
        @if (isset($dat["person_contact"][0]->prsn_nickname))
            <h2 class="slBlueDark mB10">{!! 
                $dat["person_contact"][0]->prsn_nickname !!}</h2>
        @endif
        <a href="/prepare-complaint-for-{{ $slg }}/{{ $dat['partners'][0]->part_slug 
                . (($GLOBALS['SL']->REQ->has('test')) ? '?test=1' : '') }}" 
            class="btn btn-lg btn-secondary" id="partSharBtn" 
            onmouseover="this.style.color='#FFF';" 
            onmouseout="this.style.color='#2B3493';"
            >Share Your Story</a>
        </div>
    </div>
</div>