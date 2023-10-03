<?php
define("PRIORITY_USEFUL_POPULAR", 3);
define("PRIORITY_USEFUL_UNPOPULAR", 2);
define("PRIORITY_BLOATWARE", 1);

$packages = [
	"lua/natives-2944b" => [
		"priority" => 10,
		"files" => [
			"lib/natives-2944b/init.lua" => "stand.gg/dl/lua/lib/natives-2944b/init.lua",
			"lib/natives-2944b/init.source.lua" => "stand.gg/dl/lua/lib/natives-2944b/init.source.lua",
			"lib/natives-2944b/g.lua" => "stand.gg/dl/lua/lib/natives-2944b/g.lua",
			"lib/natives-2944b/g.source.lua" => "stand.gg/dl/lua/lib/natives-2944b/g.source.lua",
		],
	],
	"lua/natives-2944a" => [
		"priority" => 9,
		"files" => [
			"lib/natives-2944a/init.lua" => "stand.gg/dl/lua/lib/natives-2944a/init.lua",
			"lib/natives-2944a/init.source.lua" => "stand.gg/dl/lua/lib/natives-2944a/init.source.lua",
			"lib/natives-2944a/uno.lua" => "stand.gg/dl/lua/lib/natives-2944a/uno.lua",
			"lib/natives-2944a/uno.source.lua" => "stand.gg/dl/lua/lib/natives-2944a/uno.source.lua",
			"lib/natives-2944a/g.lua" => "stand.gg/dl/lua/lib/natives-2944a/g.lua",
			"lib/natives-2944a/g.source.lua" => "stand.gg/dl/lua/lib/natives-2944a/g.source.lua",
			"lib/natives-2944a/g-uno.lua" => "stand.gg/dl/lua/lib/natives-2944a/g-uno.lua",
			"lib/natives-2944a/g-uno.source.lua" => "stand.gg/dl/lua/lib/natives-2944a/g-uno.source.lua",
		],
	],
	"lua/natives-1681379138" => [
		"is_dependency" => true,
		"version" => "r2",
		"priority" => 8,
		"files" => [
			"lib/natives-1681379138/init.lua" => "stand.gg/dl/lua/lib/natives-1681379138-r2/init.lua",
			"lib/natives-1681379138/init.source.lua" => "stand.gg/dl/lua/lib/natives-1681379138-r2/init.source.lua",
			"lib/natives-1681379138/uno.lua" => "stand.gg/dl/lua/lib/natives-1681379138-r2/uno.lua",
			"lib/natives-1681379138/uno.source.lua" => "stand.gg/dl/lua/lib/natives-1681379138-r2/uno.source.lua",
			"lib/natives-1681379138/g.lua" => "stand.gg/dl/lua/lib/natives-1681379138-r2/g.lua",
			"lib/natives-1681379138/g.source.lua" => "stand.gg/dl/lua/lib/natives-1681379138-r2/g.source.lua",
			"lib/natives-1681379138/g-uno.lua" => "stand.gg/dl/lua/lib/natives-1681379138-r2/g-uno.lua",
			"lib/natives-1681379138/g-uno.source.lua" => "stand.gg/dl/lua/lib/natives-1681379138-r2/g-uno.source.lua",
		],
	],
	"lua/natives-1676318796" => [
		"priority" => 7,
		"files" => [
			"lib/natives-1676318796.lua" => "stand.gg/dl/lua/lib/natives-1676318796.lua",
		],
	],
	"lua/natives-1676318796-uno" => [
		"priority" => 7,
		"files" => [
			"lib/natives-1676318796-uno.lua" => "stand.gg/dl/lua/lib/natives-1676318796-uno.lua",
		],
	],
	"lua/natives-1672190175" => [
		"priority" => 6,
		"files" => [
			"lib/natives-1672190175.lua" => "stand.gg/dl/lua/lib/natives-1672190175.lua",
		],
	],
	"lua/natives-1672190175-uno" => [
		"priority" => 6,
		"files" => [
			"lib/natives-1672190175-uno.lua" => "stand.gg/dl/lua/lib/natives-1672190175-uno.lua",
		],
	],
	"lua/natives-1663599433" => [
		"priority" => 5,
		"files" => [
			"lib/natives-1663599433.lua" => "stand.gg/dl/lua/lib/natives-1663599433.lua",
		],
	],
	"lua/natives-1663599433-uno" => [
		"priority" => 5,
		"files" => [
			"lib/natives-1663599433-uno.lua" => "stand.gg/dl/lua/lib/natives-1663599433-uno.lua",
		],
	],
	"lua/natives-1660775568" => [
		"priority" => 4,
		"files" => [
			"lib/natives-1660775568.lua" => "stand.gg/dl/lua/lib/natives-1660775568.lua",
		],
	],
	"lua/natives-1660775568-uno" => [
		"priority" => 4,
		"files" => [
			"lib/natives-1660775568-uno.lua" => "stand.gg/dl/lua/lib/natives-1660775568-uno.lua",
		],
	],
	"lua/natives-1651208000" => [
		"priority" => 3,
		"files" => [
			"lib/natives-1651208000.lua" => "stand.gg/dl/lua/lib/natives-1651208000.lua",
		],
	],
	"lua/natives-1640181023" => [
		"priority" => 2,
		"files" => [
			"lib/natives-1640181023.lua" => "stand.gg/dl/lua/lib/natives-1640181023.lua",
		],
	],
	"lua/natives-1627063482" => [
		"priority" => 1,
		"files" => [
			"lib/natives-1627063482.lua" => "stand.gg/dl/lua/lib/natives-1627063482.lua",
		],
	],
	"lua/lunajson" => [
		"files" => [
			"lib/lunajson.lua" => "stand.gg/dl/lua/lib/lunajson.lua",
			"lib/lunajson/decoder.lua" => "stand.gg/dl/lua/lib/lunajson/decoder.lua",
			"lib/lunajson/encoder.lua" => "stand.gg/dl/lua/lib/lunajson/encoder.lua",
			"lib/lunajson/sax.lua" => "stand.gg/dl/lua/lib/lunajson/sax.lua",
		],
	],
	"lua/json" => [
		"files" => [
			"lib/json.lua" => "stand.gg/dl/lua/lib/json.lua",
		],
	],
	"lua/pretty.json" => [
		"version" => "r2",
		"is_dependency" => true,
		"files" => [
			"lib/pretty/json.lua" => "stand.gg/dl/lua/lib/pretty/json.lua",
			"lib/pretty/json/constant.lua" => "stand.gg/dl/lua/lib/pretty/json/constant.lua",
			"lib/pretty/json/parser.lua" => "stand.gg/dl/lua/lib/pretty/json/parser.lua",
			"lib/pretty/json/serializer.lua" => "stand.gg/dl/lua/lib/pretty/json/serializer.lua",
		],
	],
	"lua/imGUI-V2.1.2" => [
		"author" => "Murten",
		"depends" => [
			"lua/natives-1640181023",
		],
		"files" => [
			"resources/ImGUI_checkmark.png" => "stand.gg/dl/lua/resources/ImGUI_checkmark.png",
			"resources/ImGUI_cursor.png" => "stand.gg/dl/lua/resources/ImGUI_cursor.png",
			"lib/lua_imGUI V2-1.lua" => "stand.gg/dl/lua/lib/lua_imGUI V2.1.2.lua",
		],
	],
	"lua/SLAXML" => [
		"author" => "Phrogz",
		"files" => [
			"lib/slaxml.lua" => "stand.gg/dl/lua/lib/slaxml.lua",
			"lib/slaxdom.lua" => "stand.gg/dl/lua/lib/slaxdom.lua",
		]
	],
	"lua/LanceScript" => [
		"priority" => PRIORITY_BLOATWARE,
		"author" => "lance",
		"depends" => [
			"lua/natives-2944b",
		],
		"version" => "forever-gh-1.0.1",
		"files" => [
			"LanceScript.pluto" => "raw.githubusercontent.com/thebitwise/LanceScript-Forever/1.0.1/LanceScriptForever.pluto",
		],
		"resources_version" => "forever-gh-1.0.0",
		"resources" => [
			"store/lancescript_forever/translations/english.lua" => "gist.githubusercontent.com/thebitwise/a7c7e83cbe94aa2d624f8674c50e70cf/raw/d59546b58aacef9a14f82a65dfa4bc39cabbc434/english.lua",
		],
		"trash" => [
			"store/lancescript_forever/lyrics",
			"store/lancescript_forever/translations/selected_language.txt",
			"store/lancescript_forever",
		],
	],
	"lua/Dolos" => [
		"priority" => PRIORITY_BLOATWARE,
		"description" => "A big script focused mainly on trolling, adding a whole new list to the top of Player > Trolling.",
		"author" => "lance",
		"depends" => [
			"lua/natives-2944b",
		],
		"version" => "2.2.1",
		"files" => [
			"Dolos.pluto" => "raw.githubusercontent.com/thebitwise/dolos/2.2.1/Dolos.pluto",
		],
		"resources" => [
			"resources/dolos/attention.wav" => "raw.githubusercontent.com/thebitwise/dolos/2.0.1/resources/dolos/attention.wav",
			"resources/dolos/fail.wav" => "raw.githubusercontent.com/thebitwise/dolos/2.0.1/resources/dolos/fail.wav",
			"resources/dolos/processing.wav" => "raw.githubusercontent.com/thebitwise/dolos/2.0.1/resources/dolos/processing.wav",
			"resources/dolos/success.wav" => "raw.githubusercontent.com/thebitwise/dolos/2.0.1/resources/dolos/success.wav",
		],
	],
	"lua/Dashmaster" => [
		"priority" => PRIORITY_USEFUL_UNPOPULAR,
		"author" => "lance",
		"depends" => [
			"lua/natives-2944b",
		],	
		"version" => "3.3.3",
		"files" => [
			"Dashmaster.pluto" => "raw.githubusercontent.com/thebitwise/Dashmaster/3.3.3/dashmaster.lua",
		],
		"resources" => [
			"resources/dashmaster/dial.png" => "raw.githubusercontent.com/thebitwise/Dashmaster/3.3.2/resources/dashmaster/dial.png",
			"resources/dashmaster/gear_-1.png" => "raw.githubusercontent.com/thebitwise/Dashmaster/3.3.2/resources/dashmaster/gear_-1",
			"resources/dashmaster/gear_0.png" => "raw.githubusercontent.com/thebitwise/Dashmaster/3.3.2/resources/dashmaster/gear_0.png",
			"resources/dashmaster/gear_1.png" => "raw.githubusercontent.com/thebitwise/Dashmaster/3.3.2/resources/dashmaster/gear_1.png",
			"resources/dashmaster/gear_2.png" => "raw.githubusercontent.com/thebitwise/Dashmaster/3.3.2/resources/dashmaster/gear_2.png",
			"resources/dashmaster/gear_3.png" => "raw.githubusercontent.com/thebitwise/Dashmaster/3.3.2/resources/dashmaster/gear_3.png",
			"resources/dashmaster/gear_4.png" => "raw.githubusercontent.com/thebitwise/Dashmaster/3.3.2/resources/dashmaster/gear_4.png",
			"resources/dashmaster/gear_5.png" => "raw.githubusercontent.com/thebitwise/Dashmaster/3.3.2/resources/dashmaster/gear_5.png",
			"resources/dashmaster/gear_6.png" => "raw.githubusercontent.com/thebitwise/Dashmaster/3.3.2/resources/dashmaster/gear_6.png",
			"resources/dashmaster/gear_7.png" => "raw.githubusercontent.com/thebitwise/Dashmaster/3.3.2/resources/dashmaster/gear_7.png",
			"resources/dashmaster/gear_8.png" => "raw.githubusercontent.com/thebitwise/Dashmaster/3.3.2/resources/dashmaster/gear_8.png",
			"resources/dashmaster/gear_9.png" => "raw.githubusercontent.com/thebitwise/Dashmaster/3.3.2/resources/dashmaster/gear_9.png",
			"resources/dashmaster/gear_ring.png" => "raw.githubusercontent.com/thebitwise/Dashmaster/3.3.2/resources/dashmaster/gear_ring.png",
			"resources/dashmaster/kph_label.png" => "raw.githubusercontent.com/thebitwise/Dashmaster/3.3.2/resources/dashmaster/kph_label.png",
			"resources/dashmaster/mph_label.png" => "raw.githubusercontent.com/thebitwise/Dashmaster/3.3.2/resources/dashmaster/mph_label.png",
			"resources/dashmaster/ms_label.png" => "raw.githubusercontent.com/thebitwise/Dashmaster/3.3.2/resources/dashmaster/ms_label.png",
			"resources/dashmaster/percent.png" => "raw.githubusercontent.com/thebitwise/Dashmaster/3.3.2/resources/dashmaster/percent.png",
			"resources/dashmaster/needle.png" => "raw.githubusercontent.com/thebitwise/Dashmaster/3.3.2/resources/dashmaster/needle.png",
			"resources/dashmaster/redline.png" => "raw.githubusercontent.com/thebitwise/Dashmaster/3.3.2/resources/dashmaster/redline.png",
			"resources/dashmaster/wrench.png" => "raw.githubusercontent.com/thebitwise/Dashmaster/3.3.2/resources/dashmaster/wrench.png",
			"resources/dashmaster/mph_0.png" => "raw.githubusercontent.com/thebitwise/Dashmaster/3.3.2/resources/dashmaster/mph_0.png",
			"resources/dashmaster/mph_1.png" => "raw.githubusercontent.com/thebitwise/Dashmaster/3.3.2/resources/dashmaster/mph_1.png",
			"resources/dashmaster/mph_2.png" => "raw.githubusercontent.com/thebitwise/Dashmaster/3.3.2/resources/dashmaster/mph_2.png",
			"resources/dashmaster/mph_3.png" => "raw.githubusercontent.com/thebitwise/Dashmaster/3.3.2/resources/dashmaster/mph_3.png",
			"resources/dashmaster/mph_4.png" => "raw.githubusercontent.com/thebitwise/Dashmaster/3.3.2/resources/dashmaster/mph_4.png",
			"resources/dashmaster/mph_5.png" => "raw.githubusercontent.com/thebitwise/Dashmaster/3.3.2/resources/dashmaster/mph_5.png",
			"resources/dashmaster/mph_6.png" => "raw.githubusercontent.com/thebitwise/Dashmaster/3.3.2/resources/dashmaster/mph_6.png",
			"resources/dashmaster/mph_7.png" => "raw.githubusercontent.com/thebitwise/Dashmaster/3.3.2/resources/dashmaster/mph_7.png",
			"resources/dashmaster/mph_8.png" => "raw.githubusercontent.com/thebitwise/Dashmaster/3.3.2/resources/dashmaster/mph_8.png",
			"resources/dashmaster/mph_9.png" => "raw.githubusercontent.com/thebitwise/Dashmaster/3.3.2/resources/dashmaster/mph_9.png",
		],
	],
	"lua/BetterChat" => [
		"author" => "lance",
		"depends" => [
			"lua/natives-2944b",
		],	
		"version" => "1.3.0",
		"files" => [
			"BetterChat.pluto" => "raw.githubusercontent.com/thebitwise/BetterChat/1.3.0/BetterChat.pluto",
		],
		"resources" => [
			"resources/betterchat/message.wav" => "raw.githubusercontent.com/thebitwise/BetterChat/1.3.0/resources/betterchat/message.wav",
		],
	],
	"lua/iniparser" => [
		"is_dependency" => true,
		"author" => "well-in-that-case",
		"version" => "0.2.11",
		"files" => [
			"lib/iniparser.lua" => "raw.githubusercontent.com/calamity-inc/iniparser/0.2.11/iniparser.lua",
		],
	],
	"lua/WiriScript" => [
		"priority" => PRIORITY_BLOATWARE,
		"version" => "29.51",
		"author" => "acjoker8818, Nowiry",
		"depends" => [
			"lua/natives-1660775568-uno",
			"lua/pretty.json",
		],
		"files" => [
			"WiriScript.lua" => "raw.githubusercontent.com/acjoker8818/WiriScript/v29.51/WiriScript.lua",
			"lib/wiriscript/functions.lua" => "raw.githubusercontent.com/acjoker8818/WiriScript/v29.51/lib/wiriscript/functions.lua",
			"lib/wiriscript/guided_missile.lua" => "raw.githubusercontent.com/acjoker8818/WiriScript/v29.51/lib/wiriscript/guided_missile.lua",
			"lib/wiriscript/homing_missiles.lua" => "raw.githubusercontent.com/acjoker8818/WiriScript/v29.51/lib/wiriscript/homing_missiles.lua",
			"lib/wiriscript/orbital_cannon.lua" => "raw.githubusercontent.com/acjoker8818/WiriScript/v29.51/lib/wiriscript/orbital_cannon.lua",
			"lib/wiriscript/ped_list.lua" => "raw.githubusercontent.com/acjoker8818/WiriScript/v29.51/lib/wiriscript/ped_list.lua",
			"lib/wiriscript/ufo.lua" => "raw.githubusercontent.com/acjoker8818/WiriScript/v29.51/lib/wiriscript/ufo.lua",
		],
		"resources" => [
			"resources/WiriTextures.ytd" => "raw.githubusercontent.com/nowiry/WiriScript/v18/resources/WiriTextures.ytd"
		]
	],
	"lua/Keramis Sounds" => [
		"version" => "01-25-repo",
		"author" => "scriptcat",
		"depends" => [
			"lua/natives-1640181023"
		],
		"files" => [
			"Keramis Sounds.lua" => "stand.gg/dl/lua/Keramis Sounds 01-25-repo.lua"
		]
	],
	"lua/Example Scripts" => [
		"priority" => -1,
		"version" => "106",
		"author" => "Stand Development Team",
		"depends" => [
			"lua/natives-1663599433",
		],
		"files" => [
			"Example Scripts/Async HTTP.pluto" => "raw.githubusercontent.com/calamity-inc/Stand-Example-Scripts/105.2/Async HTTP.pluto",
			"Example Scripts/Chat.pluto" => "raw.githubusercontent.com/calamity-inc/Stand-Example-Scripts/102/Chat.pluto",
			"Example Scripts/Countdown.pluto" => "raw.githubusercontent.com/calamity-inc/Stand-Example-Scripts/102/Countdown.pluto",
			"Example Scripts/DirectX.pluto" => "raw.githubusercontent.com/calamity-inc/Stand-Example-Scripts/103/DirectX.pluto",
			"Example Scripts/Draw Loop.pluto" => "raw.githubusercontent.com/calamity-inc/Stand-Example-Scripts/102/Draw Loop.pluto",
			"Example Scripts/Dump Runtime.pluto" => "raw.githubusercontent.com/calamity-inc/Stand-Example-Scripts/102/Dump Runtime.pluto",
			"Example Scripts/Explosive Hits.pluto" => "raw.githubusercontent.com/calamity-inc/Stand-Example-Scripts/106/Explosive Hits.pluto",
			"Example Scripts/Lang 1.pluto" => "raw.githubusercontent.com/calamity-inc/Stand-Example-Scripts/102/Lang 1.pluto",
			"Example Scripts/Lang 2.pluto" => "raw.githubusercontent.com/calamity-inc/Stand-Example-Scripts/102/Lang 2.pluto",
			"Example Scripts/Lang 3.pluto" => "raw.githubusercontent.com/calamity-inc/Stand-Example-Scripts/105.2/Lang 3.pluto",
			"Example Scripts/Notification Colours.pluto" => "raw.githubusercontent.com/calamity-inc/Stand-Example-Scripts/103/Notification Colours.pluto",
			"Example Scripts/Online Version.pluto" => "raw.githubusercontent.com/calamity-inc/Stand-Example-Scripts/102/Online Version.pluto",
			"Example Scripts/Player Commands.pluto" => "raw.githubusercontent.com/calamity-inc/Stand-Example-Scripts/105.1/Player Commands.pluto",
			"Example Scripts/UI3D.pluto" => "raw.githubusercontent.com/calamity-inc/Stand-Example-Scripts/102/UI3D.pluto",
			"Example Scripts/Vehicle No Decals.pluto" => "raw.githubusercontent.com/calamity-inc/Stand-Example-Scripts/102/Vehicle No Decals.pluto",
			"Example Scripts/Vehicle Spawn.pluto" => "raw.githubusercontent.com/calamity-inc/Stand-Example-Scripts/103/Vehicle Spawn.pluto",
		],
		"resources" => [
			"resources/Example Scripts/Heart.png" => "stand.gg/dl/lua/resources/Example Scripts/Heart.png",
		]
	],
	"lua/Crosshair" => [
		"version" => "0.1",
		"author" => "CocoW",
		"files" => [
			"Crosshair.lua" => "stand.gg/dl/lua/Crosshair 0.1.lua",
		],
		"resources" => [
			"cr1.png" => "stand.gg/dl/lua/resources/cr1.png",
			"cr2.png" => "stand.gg/dl/lua/resources/cr2.png",
		]
	],
	"lua/Chat Interface" => [
		"version" => "1.0.2",
		"description" => "A simple interface for the in-game chat which allows you to read and write via the web interface.",
		"files" => [
			"Chat Interface.lua" => "stand.gg/dl/lua/Chat Interface 1.0.2.lua",
		]
	],
	"lua/FlappyStand" => [
		"version" => "0.1",
		"author" => "CocoW",
		"depends" => [
			"lua/natives-1627063482",
		],
		"files" => [
			"FlappyStand.lua" => "stand.gg/dl/lua/FlappyStand 0.1.lua",
		],
		"resources" => [
			"resources/FlappyStand/flappy.png" => "stand.gg/dl/lua/resources/FlappyStand/flappy.png",
			"resources/FlappyStand/flappy_y.png" => "stand.gg/dl/lua/resources/FlappyStand/flappy_y.png",
			"resources/FlappyStand/gameover.png" => "stand.gg/dl/lua/resources/FlappyStand/gameover.png",
			"resources/FlappyStand/logo.png" => "stand.gg/dl/lua/resources/FlappyStand/logo.png",
			"resources/FlappyStand/stand.png" => "stand.gg/dl/lua/resources/FlappyStand/stand.png",
			"resources/FlappyStand/tube.png" => "stand.gg/dl/lua/resources/FlappyStand/tube.png",
			"resources/FlappyStand/tube_g.png" => "stand.gg/dl/lua/resources/FlappyStand/tube_g.png",
			"resources/FlappyStand/tube_pain.png" => "stand.gg/dl/lua/resources/FlappyStand/tube_pain.png",
		]
	],
	"lua/No Police Helicopters" => [
		"version" => "1.1",
		"author" => "Jackz",
		"depends" => [
			"lua/natives-1627063482",
		],
		"files" => [
			"No Police Helicopters.lua" => "jackz.me/stand/get-lua.php?script=no_police_helis.lua&source=repo",
		],
	],
	"lua/translations" => [
		"author" => "Jackz",
		"is_dependency" => true,
		"version" => "1.4.3",
		"files" => [
			"lib/translations.lua" => "jackz.me/stand/get-lua.php?script=lib/translations&source=repo",
		]
	],
	"lua/jackzvehiclelib" => [
		"author" => "Jackz",
		"is_dependency" => true,
		"version" => "1.3.2",
		"files" => [
			"lib/jackzvehiclelib.lua" => "jackz.me/stand/get-lua.php?script=lib/jackzvehiclelib&source=repo",
		]
	],
	"lua/Vehicle Options" => [
		"author" => "Jackz",
		"depends" => [
			"lua/natives-1627063482",
			"lua/json",
			"lua/translations",
			"lua/jackzvehiclelib",
		],
		"version" => "3.10.7",
		"files" => [
			"Vehicle Options.lua" => "jackz.me/stand/get-lua.php?script=jackz_vehicles&source=repo",
		]
	],
	"lua/Actions" => [
		"priority" => PRIORITY_USEFUL_UNPOPULAR,
		"author" => "Jackz",
		"depends" => [
			"lua/natives-1627063482",
			"lua/translations",
		],
		"version" => "1.11.9",
		"files" => [
			"Actions.lua" => "jackz.me/stand/get-lua.php?script=actions&source=repo",
		],
		"resources_version" => "r3",
		"resources" => [
			"resources/jackz_actions/animations.txt" => "jackz.me/stand/get-lua.php?script=resources/jackz_actions/animations.txt&source=repo",
			"resources/jackz_actions/actions_data.lua" => "jackz.me/stand/get-lua.php?script=resources/jackz_actions/actions_data.lua&source=repo",
		],
	],
	"lua/Stand Chat" => [
		"author" => "Jackz",
		"depends" => [
			"lua/natives-1627063482",
			"lua/json",
			"lua/translations",
		],
		"version" => "1.2.30",
		"files" => [
			"Stand Chat.lua" => "jackz.me/stand/get-lua.php?script=jackz_chat&source=repo",
		]
	],
	"lua/Train Control" => [
		"author" => "Jackz",
		"depends" => [
			"lua/natives-1627063482",
		],
		"version" => "1.1.9",
		"files" => [
			"Train Control.lua" => "jackz.me/stand/get-lua.php?script=train_control&source=repo",
		]
	],
	"lua/Jackz Vehicle Builder" => [
		"author" => "Jackz",
		"depends" => [
			"lua/natives-1627063482",
			"lua/json",
			"lua/jackzvehiclelib",
		],
		"version" => "1.25.10",
		"files" => [
			"Jackz Vehicle Builder.lua" => "jackz.me/stand/get-lua.php?script=jackz_vehicle_builder&source=repo",
		],
		"resources_version" => "r2",
		"resources" => [
			"resources/objects.txt" => "jackz.me/stand/get-lua.php?script=resources/objects.txt&source=repo",
			"resources/peds.txt" => "jackz.me/stand/get-lua.php?script=resources/peds.txt&source=repo",
			"resources/vehicles.txt" => "jackz.me/stand/get-lua.php?script=resources/vehicles.txt&source=repo",
			"resources/particles.txt" => "jackz.me/stand/get-lua.php?script=resources/particles.txt&source=repo",
		]
	],
	"lua/JerryScript" => [
		"priority" => PRIORITY_BLOATWARE,
		"author" => "jerry123",
		"version" => "1.14.8",
		"depends" => [
			"lua/natives-1660775568-uno",
			"lua/JSkeyLib",
			"lua/JSlangLib",
			"lua/ScaleformLib",
		],
		"files" => [
			"JerryScript.lua" => "raw.githubusercontent.com/Jerrrry123/JerryScript/1.14.8/JerryScript.lua",
			"store/JerryScript/Language/Dutch.lua" => "raw.githubusercontent.com/Jerrrry123/JerryScript/1.14.8/store/JerryScript/Language/Dutch.lua",
			"store/JerryScript/Language/Simplified_Chinese.lua" => "raw.githubusercontent.com/Jerrrry123/JerryScript/1.14.8/store/JerryScript/Language/Simplified_Chinese.lua",
			"store/JerryScript/Language/French.lua" => "raw.githubusercontent.com/Jerrrry123/JerryScript/1.14.8/store/JerryScript/Language/French.lua",
			"store/JerryScript/Language/German.lua" => "raw.githubusercontent.com/Jerrrry123/JerryScript/1.14.8/store/JerryScript/Language/German.lua",
			"store/JerryScript/Language/Korean.lua" => "raw.githubusercontent.com/Jerrrry123/JerryScript/1.14.8/store/JerryScript/Language/Korean.lua",
			"store/JerryScript/Language/Lithuanian.lua" => "raw.githubusercontent.com/Jerrrry123/JerryScript/1.14.8/store/JerryScript/Language/Lithuanian.lua",
			"store/JerryScript/Language/Polish.lua" => "raw.githubusercontent.com/Jerrrry123/JerryScript/1.14.8/store/JerryScript/Language/Polish.lua",
			"store/JerryScript/Language/Portugese.lua" => "raw.githubusercontent.com/Jerrrry123/JerryScript/1.14.8/store/JerryScript/Language/Portugese.lua",
			"store/JerryScript/Language/Russian.lua" => "raw.githubusercontent.com/Jerrrry123/JerryScript/1.14.8/store/JerryScript/Language/Russian.lua",
			"store/JerryScript/Language/Spanish.lua" => "raw.githubusercontent.com/Jerrrry123/JerryScript/1.14.8/store/JerryScript/Language/Spanish.lua",
			"store/JerryScript/Language/Turkish.lua" => "raw.githubusercontent.com/Jerrrry123/JerryScript/1.14.8/store/JerryScript/Language/Turkish.lua",
		],
		"resources" => [
			"resources/JS.png" => "raw.githubusercontent.com/Jerrrry123/JerryScript/1.13.4/resources/JS.png"
		],
		"resources_version" => "r2",
	],
	"lua/JSlangLib" => [
		"is_dependency" => true,
		"version" => "1.14.8",
		"author" => "jerry123",
		"files" => [
			"lib/JSlangLib.lua" => "raw.githubusercontent.com/Jerrrry123/JerryScript/1.14.8/lib/JSlangLib.lua",
		],
	],
	"lua/JSkeyLib" => [
		"is_dependency" => true,
		"version" => "1.14.5",
		"author" => "jerry123",
		"files" => [
			"lib/JSkeyLib.lua" => "raw.githubusercontent.com/Jerrrry123/JerryScript/1.14.5/lib/JSkeyLib.lua",
		],
	],
	"lua/ScaleformLib" => [
		"author" => "aaronlink127",
		"files" => [
			"lib/ScaleformLib.lua" => "stand.gg/dl/lua/lib/ScaleformLib.lua"
		]
	],
	"lua/LazScript" => [
		"priority" => PRIORITY_USEFUL_UNPOPULAR,
		"author" => "Leandro Zazzi",
		"description" => "Great for people who want additional vehicle appearance options.",
		"version" => "1.1",
		"depends" => [
			"lua/natives-1640181023"
		],
		"files" => [
			"LazScript.lua" => "raw.githubusercontent.com/leandrocoding/lazscript/v1.1/LAZScript.lua"
		]
	],
	"lua/MusinessBanager" => [
		"priority" => PRIORITY_USEFUL_POPULAR,
		"author" => "Stand Development Team; formerly ICYPhoenix & Ren",
		"version" => "e94d676",
		"files" => [
			"MusinessBanager.lua" => "raw.githubusercontent.com/calamity-inc/MusinessBanager/e94d676c5dd0a599298c787d870e633b3291fbb9/MusinessBanagersource.lua",
		],
		"resources_version" => "r5",
		"resources" => [
			"resources/Musiness Banager/Translations/de.txt" => "raw.githubusercontent.com/calamity-inc/MusinessBanager/64e4ecd872c292288f2f51d49d37842fc3b3c120/resources/Musiness Banager/Translations/de.txt",
			"resources/Musiness Banager/Translations/es.txt" => "raw.githubusercontent.com/calamity-inc/MusinessBanager/64e4ecd872c292288f2f51d49d37842fc3b3c120/resources/Musiness Banager/Translations/es.txt",
			"resources/Musiness Banager/Translations/fr.txt" => "raw.githubusercontent.com/calamity-inc/MusinessBanager/64e4ecd872c292288f2f51d49d37842fc3b3c120/resources/Musiness Banager/Translations/fr.txt",
			"resources/Musiness Banager/Translations/ko.txt" => "raw.githubusercontent.com/calamity-inc/MusinessBanager/64e4ecd872c292288f2f51d49d37842fc3b3c120/resources/Musiness Banager/Translations/ko.txt",
			"resources/Musiness Banager/Translations/pl.txt" => "raw.githubusercontent.com/calamity-inc/MusinessBanager/64e4ecd872c292288f2f51d49d37842fc3b3c120/resources/Musiness Banager/Translations/pl.txt",
			"resources/Musiness Banager/Translations/zh.txt" => "raw.githubusercontent.com/calamity-inc/MusinessBanager/64e4ecd872c292288f2f51d49d37842fc3b3c120/resources/Musiness Banager/Translations/zh.txt",
		]
	],
	"lua/Heist Control" => [
		"priority" => PRIORITY_USEFUL_POPULAR,
		"author" => "IceDoomfist",
		"version" => "3.3.7",
		"depends" => [
			"lua/natives-1681379138",
		],
		"files" => [
			"Heist Control.lua" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.3.7/Heist Control.lua",
			"store/Heist Control/Language/Chinese.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.3.6/store/Heist Control/Language/Chinese.txt",
			"store/Heist Control/Language/Custom.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.3.6/store/Heist Control/Language/Custom.txt",
			"store/Heist Control/Language/English.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.3.6/store/Heist Control/Language/English.txt",
			"store/Heist Control/Language/French.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.3.6/store/Heist Control/Language/French.txt",
			"store/Heist Control/Language/German.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.3.6/store/Heist Control/Language/German.txt",
			"store/Heist Control/Language/Italian.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.3.6/store/Heist Control/Language/Italian.txt",
			"store/Heist Control/Language/Japanese.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.3.6/store/Heist Control/Language/Japanese.txt",
			"store/Heist Control/Language/Korean.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.3.6/store/Heist Control/Language/Korean.txt",
			"store/Heist Control/Language/Polish.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.3.6/store/Heist Control/Language/Polish.txt",
			"store/Heist Control/Language/Portuguese.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.3.6/store/Heist Control/Language/Portuguese.txt",
			"store/Heist Control/Language/Russian.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.3.6/store/Heist Control/Language/Russian.txt",
			"store/Heist Control/Language/Spanish.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.3.6/store/Heist Control/Language/Spanish.txt",
		],
		"resources_version" => "r2",
		"resources" => [
			"store/Heist Control/GTAHaXUI/stat.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.2.0/store/Heist Control/GTAHaXUI/stat.txt",
			"store/Heist Control/Image/HC Banner.png" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.0.7/store/Heist Control/Image/HC Banner.png",
			"store/Heist Control/Image/Logo.ytd" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.0.7/store/Heist Control/Image/Logo.ytd",
		],
	],
	"lua/JinxScript" => [
		"priority" => PRIORITY_BLOATWARE,
		"author" => "Prisuhm",
		"depends" => [
			"lua/natives-2944a"
		],
		"version" => "0.45",
		"files" => [
			"JinxScript.pluto" => "raw.githubusercontent.com/Prisuhm/JinxScript/2fba15ecc03ce9449868d589b92926e20670db59/JinxScript.pluto",
		],
	],
	"lua/AcjokerScript" => [
		"priority" => PRIORITY_BLOATWARE,
		"author" => "acjoker8818",
		"version" => "0.38.0r1",
		"depends" => [
			"lua/natives-2944a",
			"lua/ScaleformLib",
			"lua/quaternionLib",
			"lua/pretty.json",
		],
		"files" => [
			"AcjokerScript.pluto" => "raw.githubusercontent.com/acjoker8818/AcjokerScript/0.38.0/AcjokerScript.pluto",
			"resources/AcjokerScript/ACJSTables.pluto" => "raw.githubusercontent.com/acjoker8818/AcjokerScript/0.38.0/resources/AcjokerScript/ACJSTables.pluto",
			"resources/AcjokerScript/translations.pluto" => "raw.githubusercontent.com/acjoker8818/AcjokerScript/0.38.0/resources/AcjokerScript/translations.pluto",
			"resources/AcjokerScript/Modules/Bodyguards.pluto" => "raw.githubusercontent.com/acjoker8818/AcjokerScript/0.38.0/resources/AcjokerScript/Modules/Bodyguards.pluto",
			"resources/AcjokerScript/Modules/Functions.pluto" => "raw.githubusercontent.com/acjoker8818/AcjokerScript/0.38.0/resources/AcjokerScript/Modules/Functions.pluto",
			"resources/AcjokerScript/Modules/Online.pluto" => "raw.githubusercontent.com/acjoker8818/AcjokerScript/0.38.0/resources/AcjokerScript/Modules/Online.pluto",
			"resources/AcjokerScript/Modules/Players.pluto" => "raw.githubusercontent.com/acjoker8818/AcjokerScript/0.38.0/resources/AcjokerScript/Modules/Players.pluto",
			"resources/AcjokerScript/Modules/Scaleform.pluto" => "raw.githubusercontent.com/acjoker8818/AcjokerScript/0.38.0/resources/AcjokerScript/Modules/Scaleform.pluto",
			"resources/AcjokerScript/Modules/Self.pluto" => "raw.githubusercontent.com/acjoker8818/AcjokerScript/0.38.0/resources/AcjokerScript/Modules/Self.pluto",
			"resources/AcjokerScript/Modules/Settings.pluto" => "raw.githubusercontent.com/acjoker8818/AcjokerScript/0.38.0/resources/AcjokerScript/Modules/Settings.pluto",
			"resources/AcjokerScript/Modules/Vehicles.pluto" => "raw.githubusercontent.com/acjoker8818/AcjokerScript/0.38.0/resources/AcjokerScript/Modules/Vehicles.pluto",
			"resources/AcjokerScript/Modules/Advanced Homing Missiles.pluto" => "raw.githubusercontent.com/acjoker8818/AcjokerScript/0.38.0/resources/AcjokerScript/Modules/Advanced Homing Missiles.pluto",
			"resources/AcjokerScript/Modules/Vehicle Spawning.pluto" => "raw.githubusercontent.com/acjoker8818/AcjokerScript/0.38.0/resources/AcjokerScript/Modules/Vehicle Spawning.pluto",
			"resources/AcjokerScript/Modules/Weapons.pluto" => "raw.githubusercontent.com/acjoker8818/AcjokerScript/0.38.0/resources/AcjokerScript/Modules/Weapons.pluto",
			"resources/AcjokerScript/Modules/Globals.pluto" => "raw.githubusercontent.com/acjoker8818/AcjokerScript/0.38.0/resources/AcjokerScript/Modules/Globals.pluto",
			"resources/AcjokerScript/Modules/Vehicle Neons.pluto" => "raw.githubusercontent.com/acjoker8818/AcjokerScript/0.38.0/resources/AcjokerScript/Modules/Vehicle Neons.pluto",
			"resources/AcjokerScript/Modules/Languages/de.pluto" => "raw.githubusercontent.com/acjoker8818/AcjokerScript/0.38.0/resources/AcjokerScript/Modules/Languages/de.pluto",
			"resources/AcjokerScript/Modules/Languages/es.pluto" => "raw.githubusercontent.com/acjoker8818/AcjokerScript/0.38.0/resources/AcjokerScript/Modules/Languages/es.pluto",
			"resources/AcjokerScript/Modules/Languages/fr.pluto" => "raw.githubusercontent.com/acjoker8818/AcjokerScript/0.38.0/resources/AcjokerScript/Modules/Languages/fr.pluto",
			"resources/AcjokerScript/Modules/Languages/ko.pluto" => "raw.githubusercontent.com/acjoker8818/AcjokerScript/0.38.0/resources/AcjokerScript/Modules/Languages/ko.pluto",
			"resources/AcjokerScript/Modules/Languages/lt.pluto" => "raw.githubusercontent.com/acjoker8818/AcjokerScript/0.38.0/resources/AcjokerScript/Modules/Languages/lt.pluto",
			"resources/AcjokerScript/Modules/Languages/nl.pluto" => "raw.githubusercontent.com/acjoker8818/AcjokerScript/0.38.0/resources/AcjokerScript/Modules/Languages/nl.pluto",
			"resources/AcjokerScript/Modules/Languages/pl.pluto" => "raw.githubusercontent.com/acjoker8818/AcjokerScript/0.38.0/resources/AcjokerScript/Modules/Languages/pl.pluto",
			"resources/AcjokerScript/Modules/Languages/pt.pluto" => "raw.githubusercontent.com/acjoker8818/AcjokerScript/0.38.0/resources/AcjokerScript/Modules/Languages/pt.pluto",
			"resources/AcjokerScript/Modules/Languages/ru.pluto" => "raw.githubusercontent.com/acjoker8818/AcjokerScript/0.38.0/resources/AcjokerScript/Modules/Languages/ru.pluto",
			"resources/AcjokerScript/Modules/Languages/zh.pluto" => "raw.githubusercontent.com/acjoker8818/AcjokerScript/0.38.0/resources/AcjokerScript/Modules/Languages/zh.pluto",
		],
		"resources_version" => "r4",
		"resources" => [
			"resources/AcjokerScript/intrologo.png" => "raw.githubusercontent.com/acjoker8818/AcjokerScript/0.34.3/resources/AcjokerScript/intrologo.png",
			"resources/AcjokerScript/gizmoUtils.lua" => "raw.githubusercontent.com/acjoker8818/AcjokerScript/0.34.3/resources/AcjokerScript/gizmoUtils.lua"
		],
		"trash" => [
			"store/AcjokerScript/Flying Vehicles",
			"store/AcjokerScript/Bodyguards",
			"store/AcjokerScript/Settings",
			"store/AcjokerScript/Songs",
			"store/AcjokerScript/Vehicles",
			"store/AcjokerScript",
		]
	],
	"lua/Advanced Chat" => [
		"author" => "acjoker8818",
		"description" => "Replaces the chatbox with a more customisable one.",
		"version" => "0.2.4",
		"depends" => [
			"lua/natives-1681379138"
		],
		"files" => [
			"Advanced Chat.pluto" => "raw.githubusercontent.com/acjoker8818/Advanced-Chat/0.2.4/Advanced Chat.pluto"
		],
		"trash" => [
			"store/Advanced Chat/Messages",
		],
	],
	"lua/xml2lua" => [
		"is_dependency" => true,
		"author" => "Paul Chakravarti",
		"version" => "1.5-2",
		"files" => [
			"lib/xml2lua.lua" => "stand.gg/dl/lua/lib/xml2lua.lua"
		]
	],
	"lua/inspect.lua" => [
		"is_dependency" => true,
		"author" => "Enrique García Cota",
		"version" => "3.1.0",
		"files" => [
			"lib/inspect.lua" => "stand.gg/dl/lua/lib/inspect.lua"
		]
	],
	"lua/quaternionLib" => [
		"is_dependency" => true,
		"author" => "Murten",
		"files" => [
			"lib/quaternionLib.lua" => "stand.gg/dl/lua/lib/quaternionLib.lua"
		]
	],
	"lua/Constructor" => [
		"priority" => PRIORITY_USEFUL_POPULAR,
		"author" => "hexarobi",
		"description" => "Load and edit custom map, vehicle and skin files in JSON, XML or INI format.",
		"version" => "0.41r",
		"depends" => [
			"lua/natives-1672190175",
			"lua/iniparser",
			"lua/xml2lua",
			"lua/inspect.lua",
			"lua/quaternionLib",
		],
		"files" => [
			"Constructor.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-constructor/e73d371c64d54581e73cbc0352a977b10478cb56/Constructor.lua",
			"lib/auto-updater.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-constructor/beab4e384bfca412e6c81514501c98ad7c256042/lib/auto-updater.lua",
			"lib/constructor/constants.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-constructor/e73d371c64d54581e73cbc0352a977b10478cb56/lib/constructor/constants.lua",
			"lib/constructor/constructor_lib.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-constructor/e73d371c64d54581e73cbc0352a977b10478cb56/lib/constructor/constructor_lib.lua",
			"lib/constructor/convertors.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-constructor/e73d371c64d54581e73cbc0352a977b10478cb56/lib/constructor/convertors.lua",
			"lib/constructor/translations.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-constructor/dc8c2e443c593c3029b17956ab17c453da554cad/lib/constructor/translations.lua",
		],
		"resources_version" => "r2",
		"resources" => [
			"lib/constructor/constructor_logo.png" => "raw.githubusercontent.com/hexarobi/stand-lua-constructor/91d07cd1c8a647254b8da770d34c7c6670d8404e/lib/constructor/constructor_logo.png",
			"lib/constructor/curated_attachments.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-constructor/0c497111261bc961c4720c58424e8c0d853165d1/lib/constructor/curated_attachments.lua",
			"lib/constructor/objects_complete.txt" => "raw.githubusercontent.com/hexarobi/stand-lua-constructor/0c497111261bc961c4720c58424e8c0d853165d1/lib/constructor/objects_complete.txt",
		],
		"trash" => [
			"Constructs Installer.lua",
			"../Constructs/Curated",
			"../Constructs",
		],
	],
	"lua/NovaScript" => [
		"priority" => PRIORITY_BLOATWARE,
		"author" => "Nova",
		"version" => "1.2.2-d6e30b7",
		"depends" => [
			"lua/ScaleformLib",
		],
		"files" => [
			"NovaScript.pluto" => "raw.githubusercontent.com/calamity-inc/NovaScript/d6e30b70c07821d9fbc80a2fcb494f9bc7ec2212/NovaScript.pluto",
			"lib/NovaScript/Modules/self.pluto" => "raw.githubusercontent.com/calamity-inc/NovaScript/d6e30b70c07821d9fbc80a2fcb494f9bc7ec2212/lib/NovaScript/Modules/self.pluto",
			"lib/NovaScript/Modules/online.pluto" => "raw.githubusercontent.com/calamity-inc/NovaScript/d6e30b70c07821d9fbc80a2fcb494f9bc7ec2212/lib/NovaScript/Modules/online.pluto",
			"lib/NovaScript/Modules/vehicle.pluto" => "raw.githubusercontent.com/calamity-inc/NovaScript/d6e30b70c07821d9fbc80a2fcb494f9bc7ec2212/lib/NovaScript/Modules/vehicle.pluto",
			"lib/NovaScript/Modules/weapon.pluto" => "raw.githubusercontent.com/calamity-inc/NovaScript/d6e30b70c07821d9fbc80a2fcb494f9bc7ec2212/lib/NovaScript/Modules/weapon.pluto",
			"lib/NovaScript/Modules/world.pluto" => "raw.githubusercontent.com/calamity-inc/NovaScript/d6e30b70c07821d9fbc80a2fcb494f9bc7ec2212/lib/NovaScript/Modules/world.pluto",
			"lib/NovaScript/Modules/bodyguards.pluto" => "raw.githubusercontent.com/calamity-inc/NovaScript/d6e30b70c07821d9fbc80a2fcb494f9bc7ec2212/lib/NovaScript/Modules/bodyguards.pluto",
			"lib/NovaScript/Modules/player_menu.pluto" => "raw.githubusercontent.com/calamity-inc/NovaScript/d6e30b70c07821d9fbc80a2fcb494f9bc7ec2212/lib/NovaScript/Modules/player_menu.pluto",
			"lib/NovaScript/functions.pluto" => "raw.githubusercontent.com/calamity-inc/NovaScript/d6e30b70c07821d9fbc80a2fcb494f9bc7ec2212/lib/NovaScript/functions.pluto",
			"lib/NovaScript/tables.pluto" => "raw.githubusercontent.com/calamity-inc/NovaScript/d6e30b70c07821d9fbc80a2fcb494f9bc7ec2212/lib/NovaScript/tables.pluto",
			"lib/NovaScript/NovaScript_natives.pluto" => "raw.githubusercontent.com/calamity-inc/NovaScript/d6e30b70c07821d9fbc80a2fcb494f9bc7ec2212/lib/NovaScript/NovaScript_natives.pluto",
			"lib/NovaScript/NovaS_translations.pluto" => "raw.githubusercontent.com/calamity-inc/NovaScript/d6e30b70c07821d9fbc80a2fcb494f9bc7ec2212/lib/NovaScript/NovaS_translations.pluto",
		],
		"resources" => [
			"lib/NovaScript/NovaScript_logo.png" => "raw.githubusercontent.com/NovaPlays134/NovaScript/1.0.0/lib/NovaScript/NovaScript_logo.png",
		],
	],
	"lua/NovaLay" => [
		"priority" => PRIORITY_USEFUL_UNPOPULAR,
		"author" => "Nova",
		"version" => "1.0.5",
		"description" => "A contextual overlay that provides additional information on focused players.",
		"files" => [
			"NovaLay.pluto" => "raw.githubusercontent.com/NovaPlays134/NovaLay/1.0.5/NovaLay.pluto",
		],
		"resources" => [
			"resources/NovaLay/Blip.png" => "raw.githubusercontent.com/NovaPlays134/NovaLay/1.0.0/resources/NovaLay/Blip.png",
			"resources/NovaLay/user_blip.png" => "raw.githubusercontent.com/NovaPlays134/NovaLay/1.0.0/resources/NovaLay/user_blip.png",
			"resources/NovaLay/GTA_Map.png" => "raw.githubusercontent.com/NovaPlays134/NovaLay/1.0.0/resources/NovaLay/GTA_Map.png",
			"resources/NovaLay/GTA_Map2.png" => "raw.githubusercontent.com/NovaPlays134/NovaLay/1.0.0/resources/NovaLay/GTA_Map2.png"
		],
	],
	"lua/NovaHook" => [
		"author" => "Nova",
		"version" => "1.1.2",
		"description" => "Allows you to send detections, classifications, player list, and in-game chat to a Discord webhook.",
		"depends" => [
			"lua/natives-1681379138"
		],
		"files" => [
			"NovaHook.pluto" => "raw.githubusercontent.com/NovaPlays134/NovaHook/1.1.2/NovaHook.pluto",
		],
		"resources" => [
			"resources/NovaHook/NovaHook_logo.png" => "raw.githubusercontent.com/NovaPlays134/NovaHook/1.1.2/resources/NovaHook/NovaHook_logo.png",
			"resources/NovaHook/webhook_logo.png" => "raw.githubusercontent.com/NovaPlays134/NovaHook/1.1.2/resources/NovaHook/webhook_logo.png"
		],
	],
	"lua/SlotBot" => [
		"priority" => PRIORITY_USEFUL_UNPOPULAR,
		"author" => "hexarobi",
		"description" => "Automates spinning and rigging slot machines.",
		"version" => "0.26r",
		"depends" => [
			"lua/natives-1663599433"
		],
		"files" => [
			"SlotBot.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-slotbot/8c2a1d883edfbffd1f1b1af9f064995afba15b44/SlotBot.lua"
		],
	],
	"lua/Custom Loadout" => [
		"priority" => PRIORITY_USEFUL_UNPOPULAR,
		"author" => "Davus",
		"description" => "Manage, store and equip your favourite weapon builds.",
		"version" => "v1.5.4",
		"depends" => [
			"lua/natives-1663599433"
		],
		"files" => [
			"Custom Loadout.pluto" => "raw.githubusercontent.com/Davus0717/custom-loadout/v1.5.3/src/custom-loadout.pluto"
		],
		"resources_version" => "r2",
		"resources" => [
			"lib/custom-loadout/component_resources.lua" => "raw.githubusercontent.com/Davus0717/custom-loadout/v1.5.4/src/lib/custom-loadout/component_resources.lua"
		]
	],
];

foreach($packages as $name => &$package)
{
	if(array_key_exists("resources", $package))
	{
		$arr = explode("/", $name);
		$resources_package_name = $arr[0]."/Resources for ".$arr[1];
		if(array_key_exists("depends", $package))
		{
			array_push($package["depends"], $resources_package_name);
		}
		else
		{
			$package["depends"] = [$resources_package_name];
		}
		$packages[$resources_package_name] = [
			"is_dependency" => true,
			"priority" => -9,
			"files" => $package["resources"]
		];
		if(array_key_exists("resources_version", $package))
		{
			$packages[$resources_package_name]["version"] = $package["resources_version"];
		}
		if(array_key_exists("author", $package))
		{
			$packages[$resources_package_name]["author"] = $package["author"];
		}
		unset($package["resources"]);
		unset($package["resources_version"]);
	}
}
