/** Drag-Panel plugin.  Developed on jquery 1.7.1 **//* HELPFUL MAYBE
 *
 * The plugin assumes the "pulltab" and "pane" elements have the same dimensions, are positioned absolutely and are
 * located in the positions the designer wants them to be.  When the pulltab is dragged by the user, its postion is
 * modified horizontally in tandem with the mouse cursor movement, and when it comes to rest again, it's either gonna be
 * in the same place or aligned with the opposite side of the pane. Currently only horizontal pulling is supported.
 *
 * SAMPLE HTML

<div id="wrap"> <!-- Any parent element that contains all of the control elements dragify cares about ("pulltab" and "pane") can be selected by jquery -->

    <div class="pulltab" style="background-color: blue"> <!-- the pulltab.  aligned with the left side of the pane by default TODO: default alignment options -->
        PULL ME
    </div>

  	<div class="pane" style="background-color: red; z-index: 60"> <!-- first pane. should have position: absolute -->
      this is a wrapper
      <div class="inner"> <!-- inner content pane.  this is actually what corresponds to the "alternate" version of the second pane -->
          <br/>
          <br/>
          <br/>
          <br/>
          this is content?  this could be content
      </div>
  	</div>

  	<div class="pane" style="background-color: green; z-index: 50"> <!-- second pane.  should have same (absolute) location and dimensions as the first panel -->
      this is a wrapper on the bottom pane
      <div class="inner">
          <br/>
          <br/>
          <br/>
          <br/>
          this is content?  yep this is content
      </div>
  	</div>

</div>

<script type="text/javascript">
$(document).ready(function() {
    $('#wrap').dragify();
});
</script>

*/(function(e){var t={containerKey:"container",stateKey:"pull-state",stateLeft:"left",stateRight:"right",getPanes:function(t){return t.find("."+e.fn.dragify.defaults.paneCss)},getTab:function(t,n){var r=n?n.tabCss:e.fn.dragify.defaults.tabCss;return t.find("."+r)},getFirstPane:function(n){var r=t.getPanes(n);return r&&r.length>0?e(r[0]):null},getSecondPane:function(n){var r=t.getPanes(n);return r&&r.length>1?e(r[1]):null},getContent:function(t){return t.find("."+e.fn.dragify.defaults.contentCss)},getSnapTo:function(n,r){var i=n.helper?n.helper:n,s=n.helper?n.position.left:i.position().left,o=i.data(t.containerKey),u=t.getSecondPane(o),a=r?!0:!1;if(!a){var f=i.data(t.stateKey);f==t.stateLeft?r=t.stateRight:f==t.stateRight&&(r=t.stateLeft)}var l=0;if(r==t.stateRight){l=0;if(s>e.fn.dragify.defaults.snapThreshold||a)l=u.width()}if(r==t.stateLeft){l=u.width();if(s<u.width()-e.fn.dragify.defaults.snapThreshold||a)l=0}return l},enforceBounds:function(e){var n=e.helper.data(t.containerKey),r=t.getSecondPane(n);e.position.top=e.helper.offset().top;e.position.left<r.offset().left&&(e.position.left=r.offset().left);e.position.left>r.width()&&(e.position.left=r.width())},updateDivider:function(e,n,r){var i=t.getFirstPane(n),s=t.getSecondPane(n);if(r){var o=t.getTab(n);o.animate({left:e+"px"},{step:function(e,r){t.updateDivider(e,n)},duration:250})}else{i.css({left:e+"px"}).width(s.width()-e);var u=t.getContent(i);u.css({left:-(s.width()-i.width())+"px"})}},initialized:function(e,n){var r=t.getTab(e,n);return r&&r.data(t.containerKey)},initPanes:function(e){var n=t.getTab(e);if(n&&!t.initialized(e)){n.data(t.containerKey,e);n.data(t.stateKey,t.stateLeft);n.draggable({start:t.startDrag,drag:t.dragging,stop:t.stopDrag})}},startDrag:function(e,t){},dragging:function(e,n){t.enforceBounds(n);var r=n.position.left,i=n.helper.data(t.containerKey);t.updateDivider(r,i)},stopDrag:function(n,r,i){e.fn.dragify.defaults.snap&&t.doSnap(r)},doSnap:function(n,r){var i=n.helper?n.helper:n,s=i.data(t.containerKey),o=t.getSnapTo(n,r);t.updateDivider(o,s,!0);var u=i.data(t.stateKey),a=t.getTab(s);if(u==t.stateLeft&&o>0){i.data(t.stateKey,t.stateRight);e(a).addClass("right");e(a).removeClass("left")}else if(u==t.stateRight&&o==0){i.data(t.stateKey,t.stateLeft);e(a).addClass("left");e(a).removeClass("right")}}};e.fn.extend({dragify:function(n,r){if(this.length>1){this.each(function(){e(this).dragify(n,r)});return this}if(e.isPlainObject(n)){r=n;n=null}var i={snap:!0,snapThreshold:100,currentCss:"current",paneCss:"pane",contentCss:"inner",tabCss:"pulltab"},s=!t.initialized(this,i);if(s){e.fn.dragify.defaults=i;r=e.extend(e.fn.dragify.defaults,r);t.initPanes(this)}(!s||n)&&t.doSnap(t.getTab(this),n);return this}})})(jQuery);