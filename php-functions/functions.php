<?php 

/**
 * Echos coffee incredient.
 *
 * @param Type of coffee
 */

function transformers($type) {
  if ($type == 'transformers') {
    echo '<p>The Transformers is a half-hour American animated television series which originally aired from September 17, 1984 to November 11, 1987. The first of many series in the Transformers franchise, it was based upon Hasbro&rsquo;s Transformers toy line (itself based upon the Diaclone and Microman toy lines originally created by Japanese toy manufacturer Takara) and depicts a war among giant robots that can transform into vehicles and other objects.</p>';
  } else if ($type == 'autobots') {
    echo '<p>Autobots are a fictional team of sentient robots from the planet Cybertron led by Optimus Prime, and the main protagonists in the fictional universe of the Transformers, a collection of various toys, cartoons, movies, graphic novels, and paperback books first introduced in 1984. The "Heroic Autobots" are opposed by the Evil Decepticons. Both Autobots and Decepticons are humanoid robots that can transform into machines, vehicles and other familiar mechanical objects. Autobots typically transform into regular cars, trucks, or other road vehicles (automobiles) but some few are aircraft, military vehicles, communication devices, weapons, and even robotic animals. These Autobots are often grouped into special "teams" that have the suffix "-bot" at the end, such as in Dinobot (Decepticon groups names end in "-con").</p>';
  }	else if ($type == 'decepticons') {
    echo '<p>The Decepticons are the main antagonists in the fictional universes of the Transformers franchise and related comics and cartoons, and the enemies of the Autobots. The villains take many forms, and have many different origins and stories across the numerous different Transformers media, but in almost all incarnations, they are led by Megatron. They are typically represented by the purple facial insignia they all wear. Primarily, Decepticons have red eyes, while Autobots have blue eyes. They are usually known for their air power, especially since many of them turn into aircraft. They often turn into military vehicles, construction vehicles, expensive luxury or sports cars, and even smaller-than-human-sized objects.</p>';
  } else {
    echo '<p>You are in the wrong universe.</p>';
  }
}