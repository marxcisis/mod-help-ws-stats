<!DOCTYPE html>
<html lang="en">
	<?php 
	ini_set('display_errors', '1');
	ini_set('display_startup_errors', '1');
	error_reporting(E_ALL);
	
		require_once('parts/head.php');
	?>
<body class="docs-page">
	<?php 
		require_once('/parts/header.php');
	?>
	<div class="docs-wrapper">
		<?php 
			require_once('/parts/sidebar.php');
		?>

		<div class="docs-content">
			<div class="container">
				<article class="docs-article" id="section-1">
					<header class="docs-header">
						<h1 class="docs-heading">Introduction<span class="docs-time">Last updated: 2023-04-22</span></h1>
						<section class="docs-intro">
							<p>
								You can create your own War Selection modifications
								(scenarios) for maps, maps can be made symmetrical, balance
								changes, changes in graphics and music and one new unit.
							</p>
						</section>
						<h5>Game Description:</h5>
						<p>War Selection is a pseudo-historical real-time strategy with base building, resource extraction and warfare.</p>
						<p>Players battle for supremacy against dozens of opponents on a unique procedurally generated map.</p>
						<p>Every player starts in the Stone Age.
							During the course of the match, the player is at first able to select a particular culture, and then a specific country.
							This allows to showcase the entire historical diversity of human civilization within the game.
							Each evolutionary path brings its own unique game experience.</p>
						<p>Depending on that path, game mechanics and other possibilities are expanded.
							Having passed through 7 historical eras, the player reaches the age of heavy tanks and long-range artillery.</p>
						<p>The game features more than 100 buildings and more than 200 distinct land, air and naval units.</p>
						<p>War Selection features several unique game modes:
							<ul>
								<li>Survival — A mode where you need to survive against hordes of enemies;</li>
								<li>Free for all;</li>
								<li>Ranked 1 vs 1 and 2 vs 2;</li>
								<li>Team match;</li>
								<li>Armageddon — A Battle Royale flavored mode where players with the least amount of territory are bombarded by meteors until only one player remains.</li>
							</ul>
						</p>
						<p>
							Developer: indie studio Glyph Worlds.</br>
							Engine: personal creation.</br>
							Platform: Steam and others.</br>
							Release date: October 8, 2019.</p>
					</header>
					<section class="docs-section" id="item-1-1">
						<h2 class="section-heading">Discord</h2>
						<div class="callout-block callout-block-info">
							<div class="content">
								<h4 class="callout-title">
									<a href="https://discord.gg/mrJZM8q" target="_blank" class="btn btn-sm btn-danger text-white">JOIN <i class="fa-brands fa-discord"></i></a>
								</h4>
								<p>Official game discord to get help from devs and other community members.</p>
							</div>
						</div>
					</section>
					<section class="docs-section" id="item-1-2">
						<h2 class="section-heading">Official Documentation</h2>
						<p>
							Official
							https://help-mod.warselect.io/doku.php?id=start
						</p>
					</section>
				</article>

				<article class="docs-article" id="section-2">
					<header class="docs-header">
						<h1 class="docs-heading">Basic</h1>
						<section class="docs-intro">
							<p>
								Section intro goes here. Lorem ipsum dolor sit amet,
								consectetur adipiscing elit. Quisque finibus condimentum nisl
								id vulputate. Praesent aliquet varius eros interdum suscipit.
								Donec eu purus sed nibh convallis bibendum quis vitae turpis.
								Duis vestibulum diam lorem, vitae dapibus nibh facilisis a.
								Fusce in malesuada odio.
							</p>
						</section>
						<!--//docs-intro-->
					</header>
					<section class="docs-section" id="item-2-1">
						<h2 class="section-heading">Creating Mod</h2>
						<p>
							Vivamus efficitur fringilla ullamcorper. Cras condimentum
							condimentum mauris, vitae facilisis leo. Aliquam sagittis purus
							nisi, at commodo augue convallis id. Sed interdum turpis quis
							felis bibendum imperdiet. Mauris pellentesque urna eu leo
							gravida iaculis. In fringilla odio in felis ultricies porttitor.
							Donec at purus libero. Vestibulum libero orci, commodo nec arcu
							sit amet, commodo sollicitudin est. Vestibulum ultricies
							malesuada tempor.
						</p>
					</section>
					<!--//section-->

					<section class="docs-section" id="item-2-2">
						<h2 class="section-heading">Adding Mod to map</h2>
						<p>
							Vivamus efficitur fringilla ullamcorper. Cras condimentum
							condimentum mauris, vitae facilisis leo. Aliquam sagittis purus
							nisi, at commodo augue convallis id. Sed interdum turpis quis
							felis bibendum imperdiet. Mauris pellentesque urna eu leo
							gravida iaculis. In fringilla odio in felis ultricies porttitor.
							Donec at purus libero. Vestibulum libero orci, commodo nec arcu
							sit amet, commodo sollicitudin est. Vestibulum ultricies
							malesuada tempor.
						</p>
					</section>
					<!--//section-->

					<section class="docs-section" id="item-2-3">
						<h2 class="section-heading">Sharing Mod to others</h2>
						<p>
							Vivamus efficitur fringilla ullamcorper. Cras condimentum
							condimentum mauris, vitae facilisis leo. Aliquam sagittis purus
							nisi, at commodo augue convallis id. Sed interdum turpis quis
							felis bibendum imperdiet. Mauris pellentesque urna eu leo
							gravida iaculis. In fringilla odio in felis ultricies porttitor.
							Donec at purus libero. Vestibulum libero orci, commodo nec arcu
							sit amet, commodo sollicitudin est. Vestibulum ultricies
							malesuada tempor.
						</p>
					</section>

					<section class="docs-section" id="item-2-4">
						<h2 class="section-heading">Game Mods</h2>
						<p>
							Mods list
Special game modes
Sandbox
mod-lGn8Ivf5qmb - gameplay mod
mod-nz4SD1WAHyj - creates sandbox additional interface

Armageddon mode
mod-bxRNf7V9y4f - gameplay
mod-xgLv68dj9V6 - creates armageddon additional interface

Tug of War mode
mod-eMjoqml7Qfb - gameplay mod
income - income speed
middlePercent - additional percentage of income for owning the center
sellPercent - units sell percent
wavePeriod - seconds between waves
maxHouses - maximum amount of houses
housePrepairingTime - seconds between houses building
upgradeDamagePrice - price of the damage upgrade
upgradeDamagePercent - damage percent of the damage upgrade
lifeTime - units life time in seconds
moveSpeed - speed of units on the march
All parameters can be skipped

mod-t1AxUmZaZ41 - visual mod
mod-5Qps7gHL1E1 - visual mod that includes a session interface

Gameplay
Win and defeat conditions
mod-iZvDVNV7Aok - enables draw mode if no fight for period seconds

mod-caKgiwj8lh8 - each player must has a king (397 or 398 unit type) and loses when the king dies

mod-Rgi6rNgLAmd - sets defeat if a faction has no a main building (tag 5)

mod-QmBfycUvwsi - enables Wonder victory mode after timeToWin seconds the end of the construction of a Wonder, but not earlier than minWinMoment seconds from the start of the match

mod-4Kdob459gog - disables ability to build the World Wonder

Custom map
mod-b2KPq1MD5p7 - just stores mapData to mapData storage variable

mod-QdmFm6WcJGj - initializes the factions relations from the map settings
						</p>
					</section>

				</article>

				<article class="docs-article" id="section-3">
					<header class="docs-header">
						<h1 class="docs-heading">Gameplay Functions</h1>
						<section class="docs-intro">
							<p>
								Section intro goes here. Lorem ipsum dolor sit amet,
								consectetur adipiscing elit. Quisque finibus condimentum nisl
								id vulputate. Praesent aliquet varius eros interdum suscipit.
								Donec eu purus sed nibh convallis bibendum quis vitae turpis.
								Duis vestibulum diam lorem, vitae dapibus nibh facilisis a.
								Fusce in malesuada odio.
							</p>
						</section>
					</header>
					<section class="docs-section" id="item-3-1">
						<h2 class="section-heading">onInitStarterMod</h2>
						<p>
							Vivamus efficitur fringilla ullamcorper. Cras condimentum
							condimentum mauris, vitae facilisis leo. Aliquam sagittis purus
							nisi, at commodo augue convallis id. Sed interdum turpis quis
							felis bibendum imperdiet. Mauris pellentesque urna eu leo
							gravida iaculis. In fringilla odio in felis ultricies porttitor.
							Donec at purus libero. Vestibulum libero orci, commodo nec arcu
							sit amet, commodo sollicitudin est. Vestibulum ultricies
							malesuada tempor.
						</p>
					</section>

					<section class="docs-section" id="item-3-2">
						<h2 class="section-heading">onStartStarterMod</h2>
						<p>
							Vivamus efficitur fringilla ullamcorper. Cras condimentum
							condimentum mauris, vitae facilisis leo. Aliquam sagittis purus
							nisi, at commodo augue convallis id. Sed interdum turpis quis
							felis bibendum imperdiet. Mauris pellentesque urna eu leo
							gravida iaculis. In fringilla odio in felis ultricies porttitor.
							Donec at purus libero. Vestibulum libero orci, commodo nec arcu
							sit amet, commodo sollicitudin est. Vestibulum ultricies
							malesuada tempor.
						</p>
					</section>

					<section class="docs-section" id="item-3-3">
						<h2 class="section-heading">onDumpCreateStarterMod</h2>
						<p>
							Vivamus efficitur fringilla ullamcorper. Cras condimentum
							condimentum mauris, vitae facilisis leo. Aliquam sagittis purus
							nisi, at commodo augue convallis id. Sed interdum turpis quis
							felis bibendum imperdiet. Mauris pellentesque urna eu leo
							gravida iaculis. In fringilla odio in felis ultricies porttitor.
							Donec at purus libero. Vestibulum libero orci, commodo nec arcu
							sit amet, commodo sollicitudin est. Vestibulum ultricies
							malesuada tempor.
						</p>
					</section>
					
					<section class="docs-section" id="item-3-4">
						<h2 class="section-heading">onTickStarterMod</h2>
						<p>
							Vivamus efficitur fringilla ullamcorper. Cras condimentum
							condimentum mauris, vitae facilisis leo. Aliquam sagittis purus
							nisi, at commodo augue convallis id. Sed interdum turpis quis
							felis bibendum imperdiet. Mauris pellentesque urna eu leo
							gravida iaculis. In fringilla odio in felis ultricies porttitor.
							Donec at purus libero. Vestibulum libero orci, commodo nec arcu
							sit amet, commodo sollicitudin est. Vestibulum ultricies
							malesuada tempor.
						</p>
					</section>

					<section class="docs-section" id="item-3-5">
						<h2 class="section-heading">onScriptStarterMod</h2>
						<p>
							Vivamus efficitur fringilla ullamcorper. Cras condimentum
							condimentum mauris, vitae facilisis leo. Aliquam sagittis purus
							nisi, at commodo augue convallis id. Sed interdum turpis quis
							felis bibendum imperdiet. Mauris pellentesque urna eu leo
							gravida iaculis. In fringilla odio in felis ultricies porttitor.
							Donec at purus libero. Vestibulum libero orci, commodo nec arcu
							sit amet, commodo sollicitudin est. Vestibulum ultricies
							malesuada tempor.
						</p>
					</section>

					<section class="docs-section" id="item-3-6">
						<h2 class="section-heading">onUnitDeadStarterMod</h2>
						<p>
							Vivamus efficitur fringilla ullamcorper. Cras condimentum
							condimentum mauris, vitae facilisis leo. Aliquam sagittis purus
							nisi, at commodo augue convallis id. Sed interdum turpis quis
							felis bibendum imperdiet. Mauris pellentesque urna eu leo
							gravida iaculis. In fringilla odio in felis ultricies porttitor.
							Donec at purus libero. Vestibulum libero orci, commodo nec arcu
							sit amet, commodo sollicitudin est. Vestibulum ultricies
							malesuada tempor.
						</p>
					</section>

					<section class="docs-section" id="item-3-7">
						<h2 class="section-heading">onResearchDoneStarterMod</h2>
						<p>
							Vivamus efficitur fringilla ullamcorper. Cras condimentum
							condimentum mauris, vitae facilisis leo. Aliquam sagittis purus
							nisi, at commodo augue convallis id. Sed interdum turpis quis
							felis bibendum imperdiet. Mauris pellentesque urna eu leo
							gravida iaculis. In fringilla odio in felis ultricies porttitor.
							Donec at purus libero. Vestibulum libero orci, commodo nec arcu
							sit amet, commodo sollicitudin est. Vestibulum ultricies
							malesuada tempor.
						</p>
					</section>

					<section class="docs-section" id="item-3-8">
						<h2 class="section-heading">onPlayerLoseStarterMod</h2>
						<p>
							Vivamus efficitur fringilla ullamcorper. Cras condimentum
							condimentum mauris, vitae facilisis leo. Aliquam sagittis purus
							nisi, at commodo augue convallis id. Sed interdum turpis quis
							felis bibendum imperdiet. Mauris pellentesque urna eu leo
							gravida iaculis. In fringilla odio in felis ultricies porttitor.
							Donec at purus libero. Vestibulum libero orci, commodo nec arcu
							sit amet, commodo sollicitudin est. Vestibulum ultricies
							malesuada tempor.
						</p>
					</section>

					<section class="docs-section" id="item-3-9">
						<h2 class="section-heading">onUnitInZoneStarterMod</h2>
						<p>
							Vivamus efficitur fringilla ullamcorper. Cras condimentum
							condimentum mauris, vitae facilisis leo. Aliquam sagittis purus
							nisi, at commodo augue convallis id. Sed interdum turpis quis
							felis bibendum imperdiet. Mauris pellentesque urna eu leo
							gravida iaculis. In fringilla odio in felis ultricies porttitor.
							Donec at purus libero. Vestibulum libero orci, commodo nec arcu
							sit amet, commodo sollicitudin est. Vestibulum ultricies
							malesuada tempor.
						</p>
					</section>
				</article>

				<article class="docs-article" id="section-4">
					<header class="docs-header">
						<h1 class="docs-heading">General Functions</h1>
						<section class="docs-intro">
							<p>
								Section intro goes here. Lorem ipsum dolor sit amet,
								consectetur adipiscing elit. Quisque finibus condimentum nisl
								id vulputate. Praesent aliquet varius eros interdum suscipit.
								Donec eu purus sed nibh convallis bibendum quis vitae turpis.
								Duis vestibulum diam lorem, vitae dapibus nibh facilisis a.
								Fusce in malesuada odio.
							</p>
						</section>
						<!--//docs-intro-->
					</header>
					<section class="docs-section" id="item-4-1">
						<h2 class="section-heading">log</h2>
						<p>
							Vivamus efficitur fringilla ullamcorper. Cras condimentum
							condimentum mauris, vitae facilisis leo. Aliquam sagittis purus
							nisi, at commodo augue convallis id. Sed interdum turpis quis
							felis bibendum imperdiet. Mauris pellentesque urna eu leo
							gravida iaculis. In fringilla odio in felis ultricies porttitor.
							Donec at purus libero. Vestibulum libero orci, commodo nec arcu
							sit amet, commodo sollicitudin est. Vestibulum ultricies
							malesuada tempor.
						</p>
					</section>
					<!--//section-->

					<section class="docs-section" id="item-4-2">
						<h2 class="section-heading">toJson</h2>
						<p>
							Vivamus efficitur fringilla ullamcorper. Cras condimentum
							condimentum mauris, vitae facilisis leo. Aliquam sagittis purus
							nisi, at commodo augue convallis id. Sed interdum turpis quis
							felis bibendum imperdiet. Mauris pellentesque urna eu leo
							gravida iaculis. In fringilla odio in felis ultricies porttitor.
							Donec at purus libero. Vestibulum libero orci, commodo nec arcu
							sit amet, commodo sollicitudin est. Vestibulum ultricies
							malesuada tempor.
						</p>
					</section>
					<!--//section-->

					<section class="docs-section" id="item-4-3">
						<h2 class="section-heading">fromJson</h2>
						<p>
							Vivamus efficitur fringilla ullamcorper. Cras condimentum
							condimentum mauris, vitae facilisis leo. Aliquam sagittis purus
							nisi, at commodo augue convallis id. Sed interdum turpis quis
							felis bibendum imperdiet. Mauris pellentesque urna eu leo
							gravida iaculis. In fringilla odio in felis ultricies porttitor.
							Donec at purus libero. Vestibulum libero orci, commodo nec arcu
							sit amet, commodo sollicitudin est. Vestibulum ultricies
							malesuada tempor.
						</p>
					</section>

					<section class="docs-section" id="item-4-4">
						<h2 class="section-heading">isValidJson</h2>
						<p>
							Vivamus efficitur fringilla ullamcorper. Cras condimentum
							condimentum mauris, vitae facilisis leo. Aliquam sagittis purus
							nisi, at commodo augue convallis id. Sed interdum turpis quis
							felis bibendum imperdiet. Mauris pellentesque urna eu leo
							gravida iaculis. In fringilla odio in felis ultricies porttitor.
							Donec at purus libero. Vestibulum libero orci, commodo nec arcu
							sit amet, commodo sollicitudin est. Vestibulum ultricies
							malesuada tempor.
						</p>
					</section>

					<section class="docs-section" id="item-4-5">
						<h2 class="section-heading">localize</h2>
						<p>
							Vivamus efficitur fringilla ullamcorper. Cras condimentum
							condimentum mauris, vitae facilisis leo. Aliquam sagittis purus
							nisi, at commodo augue convallis id. Sed interdum turpis quis
							felis bibendum imperdiet. Mauris pellentesque urna eu leo
							gravida iaculis. In fringilla odio in felis ultricies porttitor.
							Donec at purus libero. Vestibulum libero orci, commodo nec arcu
							sit amet, commodo sollicitudin est. Vestibulum ultricies
							malesuada tempor.
						</p>
					</section>

					<section class="docs-section" id="item-4-6">
						<h2 class="section-heading">getParameters</h2>
						<p>
							Vivamus efficitur fringilla ullamcorper. Cras condimentum
							condimentum mauris, vitae facilisis leo. Aliquam sagittis purus
							nisi, at commodo augue convallis id. Sed interdum turpis quis
							felis bibendum imperdiet. Mauris pellentesque urna eu leo
							gravida iaculis. In fringilla odio in felis ultricies porttitor.
							Donec at purus libero. Vestibulum libero orci, commodo nec arcu
							sit amet, commodo sollicitudin est. Vestibulum ultricies
							malesuada tempor.
						</p>
					</section>

					<section class="docs-section" id="item-4-7">
						<h2 class="section-heading">getParameter</h2>
						<p>
							Vivamus efficitur fringilla ullamcorper. Cras condimentum
							condimentum mauris, vitae facilisis leo. Aliquam sagittis purus
							nisi, at commodo augue convallis id. Sed interdum turpis quis
							felis bibendum imperdiet. Mauris pellentesque urna eu leo
							gravida iaculis. In fringilla odio in felis ultricies porttitor.
							Donec at purus libero. Vestibulum libero orci, commodo nec arcu
							sit amet, commodo sollicitudin est. Vestibulum ultricies
							malesuada tempor.
						</p>
					</section>
					<!--//section-->
				</article>
				<!--//docs-article-->

				<article class="docs-article" id="section-5">
					<header class="docs-header">
						<h1 class="docs-heading">Root functions</h1>
						<section class="docs-intro">
							<p>
								Section intro goes here. Lorem ipsum dolor sit amet,
								consectetur adipiscing elit. Quisque finibus condimentum nisl
								id vulputate. Praesent aliquet varius eros interdum suscipit.
								Donec eu purus sed nibh convallis bibendum quis vitae turpis.
								Duis vestibulum diam lorem, vitae dapibus nibh facilisis a.
								Fusce in malesuada odio.
							</p>
						</section>
						<!--//docs-intro-->
					</header>
					<section class="docs-section" id="item-5-1">
						<h2 class="section-heading">unitType</h2>
						<p>
							Vivamus efficitur fringilla ullamcorper. Cras condimentum
							condimentum mauris, vitae facilisis leo. Aliquam sagittis purus
							nisi, at commodo augue convallis id. Sed interdum turpis quis
							felis bibendum imperdiet. Mauris pellentesque urna eu leo
							gravida iaculis. In fringilla odio in felis ultricies porttitor.
							Donec at purus libero. Vestibulum libero orci, commodo nec arcu
							sit amet, commodo sollicitudin est. Vestibulum ultricies
							malesuada tempor.
						</p>
					</section>
					<!--//section-->

					<section class="docs-section" id="item-5-2">
						<h2 class="section-heading">unitTypeModified</h2>
						<p>
							Vivamus efficitur fringilla ullamcorper. Cras condimentum
							condimentum mauris, vitae facilisis leo. Aliquam sagittis purus
							nisi, at commodo augue convallis id. Sed interdum turpis quis
							felis bibendum imperdiet. Mauris pellentesque urna eu leo
							gravida iaculis. In fringilla odio in felis ultricies porttitor.
							Donec at purus libero. Vestibulum libero orci, commodo nec arcu
							sit amet, commodo sollicitudin est. Vestibulum ultricies
							malesuada tempor.
						</p>
					</section>
					<!--//section-->

					<section class="docs-section" id="item-5-3">
						<h2 class="section-heading">envType</h2>
						<p>
							Vivamus efficitur fringilla ullamcorper. Cras condimentum
							condimentum mauris, vitae facilisis leo. Aliquam sagittis purus
							nisi, at commodo augue convallis id. Sed interdum turpis quis
							felis bibendum imperdiet. Mauris pellentesque urna eu leo
							gravida iaculis. In fringilla odio in felis ultricies porttitor.
							Donec at purus libero. Vestibulum libero orci, commodo nec arcu
							sit amet, commodo sollicitudin est. Vestibulum ultricies
							malesuada tempor.
						</p>
					</section>

					<section class="docs-section" id="item-5-4">
						<h2 class="section-heading">projectileType</h2>
						<p>
							Vivamus efficitur fringilla ullamcorper. Cras condimentum
							condimentum mauris, vitae facilisis leo. Aliquam sagittis purus
							nisi, at commodo augue convallis id. Sed interdum turpis quis
							felis bibendum imperdiet. Mauris pellentesque urna eu leo
							gravida iaculis. In fringilla odio in felis ultricies porttitor.
							Donec at purus libero. Vestibulum libero orci, commodo nec arcu
							sit amet, commodo sollicitudin est. Vestibulum ultricies
							malesuada tempor.
						</p>
					</section>

					<section class="docs-section" id="item-5-5">
						<h2 class="section-heading">scripts</h2>
						<p>
							Vivamus efficitur fringilla ullamcorper. Cras condimentum
							condimentum mauris, vitae facilisis leo. Aliquam sagittis purus
							nisi, at commodo augue convallis id. Sed interdum turpis quis
							felis bibendum imperdiet. Mauris pellentesque urna eu leo
							gravida iaculis. In fringilla odio in felis ultricies porttitor.
							Donec at purus libero. Vestibulum libero orci, commodo nec arcu
							sit amet, commodo sollicitudin est. Vestibulum ultricies
							malesuada tempor.
						</p>
					</section>

					<section class="docs-section" id="item-5-6">
						<h2 class="section-heading">researches</h2>
						<p>
							Vivamus efficitur fringilla ullamcorper. Cras condimentum
							condimentum mauris, vitae facilisis leo. Aliquam sagittis purus
							nisi, at commodo augue convallis id. Sed interdum turpis quis
							felis bibendum imperdiet. Mauris pellentesque urna eu leo
							gravida iaculis. In fringilla odio in felis ultricies porttitor.
							Donec at purus libero. Vestibulum libero orci, commodo nec arcu
							sit amet, commodo sollicitudin est. Vestibulum ultricies
							malesuada tempor.
						</p>
					</section>

					<section class="docs-section" id="item-5-7">
						<h2 class="section-heading">fowCellSize</h2>
						<p>
							Vivamus efficitur fringilla ullamcorper. Cras condimentum
							condimentum mauris, vitae facilisis leo. Aliquam sagittis purus
							nisi, at commodo augue convallis id. Sed interdum turpis quis
							felis bibendum imperdiet. Mauris pellentesque urna eu leo
							gravida iaculis. In fringilla odio in felis ultricies porttitor.
							Donec at purus libero. Vestibulum libero orci, commodo nec arcu
							sit amet, commodo sollicitudin est. Vestibulum ultricies
							malesuada tempor.
						</p>
					</section>

					<section class="docs-section" id="item-5-8">
						<h2 class="section-heading">fowUpdateMoveDistance</h2>
						<p>
							Vivamus efficitur fringilla ullamcorper. Cras condimentum
							condimentum mauris, vitae facilisis leo. Aliquam sagittis purus
							nisi, at commodo augue convallis id. Sed interdum turpis quis
							felis bibendum imperdiet. Mauris pellentesque urna eu leo
							gravida iaculis. In fringilla odio in felis ultricies porttitor.
							Donec at purus libero. Vestibulum libero orci, commodo nec arcu
							sit amet, commodo sollicitudin est. Vestibulum ultricies
							malesuada tempor.
						</p>
					</section>

					<section class="docs-section" id="item-5-9">
						<h2 class="section-heading">fowUpdateMoveTime</h2>
						<p>
							Vivamus efficitur fringilla ullamcorper. Cras condimentum
							condimentum mauris, vitae facilisis leo. Aliquam sagittis purus
							nisi, at commodo augue convallis id. Sed interdum turpis quis
							felis bibendum imperdiet. Mauris pellentesque urna eu leo
							gravida iaculis. In fringilla odio in felis ultricies porttitor.
							Donec at purus libero. Vestibulum libero orci, commodo nec arcu
							sit amet, commodo sollicitudin est. Vestibulum ultricies
							malesuada tempor.
						</p>
					</section>

					<section class="docs-section" id="item-5-10">
						<h2 class="section-heading">buildPlanStayTime</h2>
						<p>
						</p>
					</section>

					<section class="docs-section" id="item-5-11">
						<h2 class="section-heading">build</h2>
						<p>
						</p>
					</section>

					<section class="docs-section" id="item-5-12">
						<h2 class="section-heading">defaultFormationType</h2>
						<p>
						</p>
					</section>

					<section class="docs-section" id="item-5-13">
						<h2 class="section-heading">defaultFormationInterval</h2>
						<p>
						</p>
					</section>
					
					<section class="docs-section" id="item-5-14">
						<h2 class="section-heading">version</h2>
						<p>
						</p>
					</section>

					<section class="docs-section" id="item-5-15">
						<h2 class="section-heading">random</h2>
						<p>
						</p>
					</section>

					<section class="docs-section" id="item-5-16">
						<h2 class="section-heading">scene</h2>
						<p>
						</p>
					</section>

					<section class="docs-section" id="item-5-17">
						<h2 class="section-heading">faction</h2>
						<p>
						</p>
					</section>

					<section class="docs-section" id="item-5-18">
						<h2 class="section-heading">time</h2>
						<p>
						</p>
					</section>

					<section class="docs-section" id="item-5-19">
						<h2 class="section-heading">unitsWorkSpeed</h2>
						<p>
						</p>
					</section>

					<section class="docs-section" id="item-5-20">
						<h2 class="section-heading">unitsBuildSpeed</h2>
						<p>
						</p>
					</section>

					<section class="docs-section" id="item-5-21">
						<h2 class="section-heading">eliminatePlayer</h2>
						<p>
						</p>
					</section>

					<section class="docs-section" id="item-5-22">
						<h2 class="section-heading">sendDataToServer</h2>
						<p>
						</p>
					</section>

					<section class="docs-section" id="item-5-23">
						<h2 class="section-heading">finish</h2>
						<p>
						</p>
					</section>

					<section class="docs-section" id="item-5-24">
						<h2 class="section-heading">player</h2>
						<p>
						</p>
					</section>

					<section class="docs-section" id="item-5-25">
						<h2 class="section-heading">scenePlayer</h2>
						<p>
						</p>
					</section>

					<section class="docs-section" id="item-5-26">
						<h2 class="section-heading">finished</h2>
						<p>
						</p>
					</section>

					<section class="docs-section" id="item-5-27">
						<h2 class="section-heading">dataStorage</h2>
						<p>
						</p>
					</section>
				</article>

				<article class="docs-article" id="section-6">
					<header class="docs-header">
						<h1 class="docs-heading">Examples</h1>
						<section class="docs-intro">
							<p>
								Section intro goes here. Lorem ipsum dolor sit amet,
								consectetur adipiscing elit. Quisque finibus condimentum nisl
								id vulputate. Praesent aliquet varius eros interdum suscipit.
								Donec eu purus sed nibh convallis bibendum quis vitae turpis.
								Duis vestibulum diam lorem, vitae dapibus nibh facilisis a.
								Fusce in malesuada odio.
							</p>
						</section>
						
					</header>
					<section class="docs-section" id="item-6-1">
						<h2 class="section-heading">Example 1</h2>
						<p>
							Vivamus efficitur fringilla ullamcorper. Cras condimentum
							condimentum mauris, vitae facilisis leo. Aliquam sagittis purus
							nisi, at commodo augue convallis id. Sed interdum turpis quis
							felis bibendum imperdiet. Mauris pellentesque urna eu leo
							gravida iaculis. In fringilla odio in felis ultricies porttitor.
							Donec at purus libero. Vestibulum libero orci, commodo nec arcu
							sit amet, commodo sollicitudin est. Vestibulum ultricies
							malesuada tempor.
						</p>
					</section>

					<section class="docs-section" id="item-6-2">
						<h2 class="section-heading">Example 2</h2>
						<p>
							Vivamus efficitur fringilla ullamcorper. Cras condimentum
							condimentum mauris, vitae facilisis leo. Aliquam sagittis purus
							nisi, at commodo augue convallis id. Sed interdum turpis quis
							felis bibendum imperdiet. Mauris pellentesque urna eu leo
							gravida iaculis. In fringilla odio in felis ultricies porttitor.
							Donec at purus libero. Vestibulum libero orci, commodo nec arcu
							sit amet, commodo sollicitudin est. Vestibulum ultricies
							malesuada tempor.
						</p>
					</section>

					<section class="docs-section" id="item-6-3">
						<h2 class="section-heading">Example 3</h2>
						<p>
							Vivamus efficitur fringilla ullamcorper. Cras condimentum
							condimentum mauris, vitae facilisis leo. Aliquam sagittis purus
							nisi, at commodo augue convallis id. Sed interdum turpis quis
							felis bibendum imperdiet. Mauris pellentesque urna eu leo
							gravida iaculis. In fringilla odio in felis ultricies porttitor.
							Donec at purus libero. Vestibulum libero orci, commodo nec arcu
							sit amet, commodo sollicitudin est. Vestibulum ultricies
							malesuada tempor.
						</p>
					</section>
				</article>

				<footer class="footer">
					<div class="container text-center py-5">
						<!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
						<small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"
								style="color: #fb866a"></i> by MarkoLV
							for developers</small>
					</div>
				</footer>
			</div>
		</div>
	</div>
	<!--//docs-wrapper-->

	<!-- Javascript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

	<!-- Page Specific JS -->
	<script src="assets/plugins/smoothscroll.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
	<script src="assets/js/highlight-custom.js"></script>
	<script src="assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script>
	<script src="assets/js/docs.js"></script>
</body>

</html>