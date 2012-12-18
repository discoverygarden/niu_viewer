$(document).ready(function() {
  $("img").error(function () {
    $(this).unbind("error").attr("src", "/sites/all/modules/islandora_solr_search/images/defaultimg.png");
    $(this).attr("height", "85");
  });
});
