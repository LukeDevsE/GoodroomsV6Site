<?php 
  // GRCore Easter Egg
  // This Redirects to cheats.php when Arrow Up is Hit 5 Times, then Arrow Down 5 Times Too
  ?>
<script src="/konami.js"></script>
<script>
 const easterEgg = new Konami("http://bluegr.cf/cheats")
   easterEgg.pattern = "38383838384040404040"
</script>