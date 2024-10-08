<!--
Viewport width indicator
========================
Just delete this if or when you don't need it.
-->

<div id="vp" style="position: fixed; bottom: 0.5rem; right: 0.5rem; z-index: 999; display: inline-block; background: #555; color: #ffffff; padding: 0 0.5rem 0.125rem; border-radius: 0.25rem;"></div>

<script>
  var vp = document.body.querySelector('#vp');
  var viewportWidth = window.innerWidth + 'px';
  vp.innerHTML = viewportWidth;
  window.addEventListener('resize', function () {
    viewportWidth = window.innerWidth + 'px';
    vp.innerHTML = viewportWidth;
  });
</script>