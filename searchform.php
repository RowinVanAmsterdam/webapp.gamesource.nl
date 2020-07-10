<?php $search_text = ""; ?>
<form method="get" id="searchform" class="searchform"
      action="<?php bloginfo('home'); ?>/">
    <div class="searchform__fields">
    <input type="text" value="<?php echo $search_text; ?>"
           name="s" id="s"
           placeholder="Zoeken" />
<!--           onblur="if (this.value == '')-->
<!--               {this.value = '--><?php //echo $search_text; ?><!--';}"-->
<!--           onfocus="if (this.value == '--><?php //echo $search_text; ?><!--')-->
<!--               {this.value = '';}" -->
        <i id="filtersubmit" class="fa fa-search"></i>
    <input type="hidden" id="searchsubmit" />
    </div>
</form>