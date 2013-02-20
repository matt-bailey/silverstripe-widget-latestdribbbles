<% if LatestDribbbles %>
<% control LatestDribbbles %>
<script type="text/javascript">
    $(window).load(function() {
        var hcs = new HalfCourtShot({
            goal: "dribbble-$ID",
            jersey: "$Jersey",
            shots: $Shots
        });
    });
</script>
<div id="dribbble-$ID"></div>
<% end_control %>
<% end_if %>
