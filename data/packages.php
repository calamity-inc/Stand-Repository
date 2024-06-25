<?php
define("PRIORITY_USEFUL_POPULAR", 3);
define("PRIORITY_USEFUL_UNPOPULAR", 2);
define("PRIORITY_BLOATWARE", 1);
define("PRIORITY_GIMMICK", -1);
define("PRIORITY_FOR_DEVELOPERS", -2);
define("PRIORITY_RESOURCES", -9);

$packages = [
	"lua/natives-3095a" => [
		"priority" => 11,
		"files" => [
			"lib/natives-3095a/init.lua" => "stand.gg/dl/lua/lib/natives-3095a/init.lua",
			"lib/natives-3095a/init.source.lua" => "stand.gg/dl/lua/lib/natives-3095a/init.source.lua",
			"lib/natives-3095a/g.lua" => "stand.gg/dl/lua/lib/natives-3095a/g.lua",
			"lib/natives-3095a/g.source.lua" => "stand.gg/dl/lua/lib/natives-3095a/g.source.lua",
		],
	],
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
		"type" => "library",
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
	"lua/json" => [
		"files" => [
			"lib/json.lua" => "stand.gg/dl/lua/lib/json.lua",
		],
	],
	"lua/pretty.json" => [
		"version" => "r2",
		"type" => "library",
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
		"depends" => [
			"lua/natives-2944b",
		],
		"version" => "67a62ee",
		"files" => [
			"LanceScript.pluto" => "raw.githubusercontent.com/calamity-inc/LanceScript/67a62eeedc06028ae38201847a74ec0059899cef/LanceScript.pluto",
		],
		"resources_version" => "forever-gh-1.0.0",
		"resources" => [
			"store/lancescript_forever/translations/english.lua" => "raw.githubusercontent.com/calamity-inc/LanceScript/87fdbd3ad566f38e1ef2c709443f32acc4728bae/store/lancescript_forever/translations/english.lua",
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
		"depends" => [
			"lua/natives-2944b",
		],
		"version" => "82c4483",
		"files" => [
			"Dolos.pluto" => "raw.githubusercontent.com/calamity-inc/Dolos/82c44837cb4709d0c22e2cc6177e4761a379e7aa/Dolos.pluto",
		],
	],
	"lua/Dashmaster" => [
		"priority" => PRIORITY_USEFUL_UNPOPULAR,
		"depends" => [
			"lua/natives-2944b",
		],
		"version" => "0c069bd",
		"files" => [
			"Dashmaster.pluto" => "raw.githubusercontent.com/calamity-inc/Dashmaster/0c069bd45b9a4f7a2c043decc35055523618b5c7/Dashmaster.pluto",
		],
		"resources_version" => "3.4.0",
		"resources" => [
			"resources/dashmaster/dial.png" => "raw.githubusercontent.com/calamity-inc/Dashmaster/0c069bd45b9a4f7a2c043decc35055523618b5c7/resources/dashmaster/dial.png",
			"resources/dashmaster/gear_0.png" => "raw.githubusercontent.com/calamity-inc/Dashmaster/0c069bd45b9a4f7a2c043decc35055523618b5c7/resources/dashmaster/gear_0.png",
			"resources/dashmaster/gear_1.png" => "raw.githubusercontent.com/calamity-inc/Dashmaster/0c069bd45b9a4f7a2c043decc35055523618b5c7/resources/dashmaster/gear_1.png",
			"resources/dashmaster/gear_2.png" => "raw.githubusercontent.com/calamity-inc/Dashmaster/0c069bd45b9a4f7a2c043decc35055523618b5c7/resources/dashmaster/gear_2.png",
			"resources/dashmaster/gear_3.png" => "raw.githubusercontent.com/calamity-inc/Dashmaster/0c069bd45b9a4f7a2c043decc35055523618b5c7/resources/dashmaster/gear_3.png",
			"resources/dashmaster/gear_4.png" => "raw.githubusercontent.com/calamity-inc/Dashmaster/0c069bd45b9a4f7a2c043decc35055523618b5c7/resources/dashmaster/gear_4.png",
			"resources/dashmaster/gear_5.png" => "raw.githubusercontent.com/calamity-inc/Dashmaster/0c069bd45b9a4f7a2c043decc35055523618b5c7/resources/dashmaster/gear_5.png",
			"resources/dashmaster/gear_6.png" => "raw.githubusercontent.com/calamity-inc/Dashmaster/0c069bd45b9a4f7a2c043decc35055523618b5c7/resources/dashmaster/gear_6.png",
			"resources/dashmaster/gear_7.png" => "raw.githubusercontent.com/calamity-inc/Dashmaster/0c069bd45b9a4f7a2c043decc35055523618b5c7/resources/dashmaster/gear_7.png",
			"resources/dashmaster/gear_8.png" => "raw.githubusercontent.com/calamity-inc/Dashmaster/0c069bd45b9a4f7a2c043decc35055523618b5c7/resources/dashmaster/gear_8.png",
			"resources/dashmaster/gear_9.png" => "raw.githubusercontent.com/calamity-inc/Dashmaster/0c069bd45b9a4f7a2c043decc35055523618b5c7/resources/dashmaster/gear_9.png",
			"resources/dashmaster/gear_ring.png" => "raw.githubusercontent.com/calamity-inc/Dashmaster/0c069bd45b9a4f7a2c043decc35055523618b5c7/resources/dashmaster/gear_ring.png",
			"resources/dashmaster/kph_label.png" => "raw.githubusercontent.com/calamity-inc/Dashmaster/0c069bd45b9a4f7a2c043decc35055523618b5c7/resources/dashmaster/kph_label.png",
			"resources/dashmaster/mph_label.png" => "raw.githubusercontent.com/calamity-inc/Dashmaster/0c069bd45b9a4f7a2c043decc35055523618b5c7/resources/dashmaster/mph_label.png",
			"resources/dashmaster/knots_label.png" => "raw.githubusercontent.com/calamity-inc/Dashmaster/0c069bd45b9a4f7a2c043decc35055523618b5c7/resources/dashmaster/knots_label.png",
			"resources/dashmaster/ms_label.png" => "raw.githubusercontent.com/calamity-inc/Dashmaster/0c069bd45b9a4f7a2c043decc35055523618b5c7/resources/dashmaster/ms_label.png",
			"resources/dashmaster/percent.png" => "raw.githubusercontent.com/calamity-inc/Dashmaster/0c069bd45b9a4f7a2c043decc35055523618b5c7/resources/dashmaster/percent.png",
			"resources/dashmaster/needle.png" => "raw.githubusercontent.com/calamity-inc/Dashmaster/0c069bd45b9a4f7a2c043decc35055523618b5c7/resources/dashmaster/needle.png",
			"resources/dashmaster/redline.png" => "raw.githubusercontent.com/calamity-inc/Dashmaster/0c069bd45b9a4f7a2c043decc35055523618b5c7/resources/dashmaster/redline.png",
			"resources/dashmaster/wrench.png" => "raw.githubusercontent.com/calamity-inc/Dashmaster/0c069bd45b9a4f7a2c043decc35055523618b5c7/resources/dashmaster/wrench.png",
			"resources/dashmaster/mph_0.png" => "raw.githubusercontent.com/calamity-inc/Dashmaster/0c069bd45b9a4f7a2c043decc35055523618b5c7/resources/dashmaster/mph_0.png",
			"resources/dashmaster/mph_1.png" => "raw.githubusercontent.com/calamity-inc/Dashmaster/0c069bd45b9a4f7a2c043decc35055523618b5c7/resources/dashmaster/mph_1.png",
			"resources/dashmaster/mph_2.png" => "raw.githubusercontent.com/calamity-inc/Dashmaster/0c069bd45b9a4f7a2c043decc35055523618b5c7/resources/dashmaster/mph_2.png",
			"resources/dashmaster/mph_3.png" => "raw.githubusercontent.com/calamity-inc/Dashmaster/0c069bd45b9a4f7a2c043decc35055523618b5c7/resources/dashmaster/mph_3.png",
			"resources/dashmaster/mph_4.png" => "raw.githubusercontent.com/calamity-inc/Dashmaster/0c069bd45b9a4f7a2c043decc35055523618b5c7/resources/dashmaster/mph_4.png",
			"resources/dashmaster/mph_5.png" => "raw.githubusercontent.com/calamity-inc/Dashmaster/0c069bd45b9a4f7a2c043decc35055523618b5c7/resources/dashmaster/mph_5.png",
			"resources/dashmaster/mph_6.png" => "raw.githubusercontent.com/calamity-inc/Dashmaster/0c069bd45b9a4f7a2c043decc35055523618b5c7/resources/dashmaster/mph_6.png",
			"resources/dashmaster/mph_7.png" => "raw.githubusercontent.com/calamity-inc/Dashmaster/0c069bd45b9a4f7a2c043decc35055523618b5c7/resources/dashmaster/mph_7.png",
			"resources/dashmaster/mph_8.png" => "raw.githubusercontent.com/calamity-inc/Dashmaster/0c069bd45b9a4f7a2c043decc35055523618b5c7/resources/dashmaster/mph_8.png",
			"resources/dashmaster/mph_9.png" => "raw.githubusercontent.com/calamity-inc/Dashmaster/0c069bd45b9a4f7a2c043decc35055523618b5c7/resources/dashmaster/mph_9.png",
		],
	],
	"lua/iniparser" => [
		"type" => "library",
		"author" => "well-in-that-case",
		"version" => "0.2.12",
		"files" => [
			"lib/iniparser.lua" => "raw.githubusercontent.com/calamity-inc/iniparser/0.2.12/iniparser.lua",
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
	"lua/Example Scripts" => [
		"priority" => PRIORITY_FOR_DEVELOPERS,
		"version" => "e86ed2c",
		"author" => "Stand Development Team",
		"depends" => [
			"lua/natives-1663599433",
		],
		"files" => [
			"Example Scripts/Async HTTP.pluto" => "raw.githubusercontent.com/calamity-inc/Stand-Example-Scripts/e86ed2c4b0d9c1fcb0574aff47454d9db8836778/Async HTTP.pluto",
			"Example Scripts/Chat.pluto" => "raw.githubusercontent.com/calamity-inc/Stand-Example-Scripts/e86ed2c4b0d9c1fcb0574aff47454d9db8836778/Chat.pluto",
			"Example Scripts/Countdown.pluto" => "raw.githubusercontent.com/calamity-inc/Stand-Example-Scripts/e86ed2c4b0d9c1fcb0574aff47454d9db8836778/Countdown.pluto",
			"Example Scripts/DirectX.pluto" => "raw.githubusercontent.com/calamity-inc/Stand-Example-Scripts/e86ed2c4b0d9c1fcb0574aff47454d9db8836778/DirectX.pluto",
			"Example Scripts/Draw Loop.pluto" => "raw.githubusercontent.com/calamity-inc/Stand-Example-Scripts/e86ed2c4b0d9c1fcb0574aff47454d9db8836778/Draw Loop.pluto",
			"Example Scripts/Dump Runtime.pluto" => "raw.githubusercontent.com/calamity-inc/Stand-Example-Scripts/e86ed2c4b0d9c1fcb0574aff47454d9db8836778/Dump Runtime.pluto",
			"Example Scripts/Explosive Hits.pluto" => "raw.githubusercontent.com/calamity-inc/Stand-Example-Scripts/e86ed2c4b0d9c1fcb0574aff47454d9db8836778/Explosive Hits.pluto",
			"Example Scripts/Lang 1.pluto" => "raw.githubusercontent.com/calamity-inc/Stand-Example-Scripts/e86ed2c4b0d9c1fcb0574aff47454d9db8836778/Lang 1.pluto",
			"Example Scripts/Lang 2.pluto" => "raw.githubusercontent.com/calamity-inc/Stand-Example-Scripts/e86ed2c4b0d9c1fcb0574aff47454d9db8836778/Lang 2.pluto",
			"Example Scripts/Lang 3.pluto" => "raw.githubusercontent.com/calamity-inc/Stand-Example-Scripts/e86ed2c4b0d9c1fcb0574aff47454d9db8836778/Lang 3.pluto",
			"Example Scripts/Notification Colours.pluto" => "raw.githubusercontent.com/calamity-inc/Stand-Example-Scripts/e86ed2c4b0d9c1fcb0574aff47454d9db8836778/Notification Colours.pluto",
			"Example Scripts/Online Version.pluto" => "raw.githubusercontent.com/calamity-inc/Stand-Example-Scripts/e86ed2c4b0d9c1fcb0574aff47454d9db8836778/Online Version.pluto",
			"Example Scripts/Player Commands.pluto" => "raw.githubusercontent.com/calamity-inc/Stand-Example-Scripts/e86ed2c4b0d9c1fcb0574aff47454d9db8836778/Player Commands.pluto",
			"Example Scripts/UI3D.pluto" => "raw.githubusercontent.com/calamity-inc/Stand-Example-Scripts/e86ed2c4b0d9c1fcb0574aff47454d9db8836778/UI3D.pluto",
			"Example Scripts/Vehicle No Decals.pluto" => "raw.githubusercontent.com/calamity-inc/Stand-Example-Scripts/e86ed2c4b0d9c1fcb0574aff47454d9db8836778/Vehicle No Decals.pluto",
			"Example Scripts/Vehicle Spawn.pluto" => "raw.githubusercontent.com/calamity-inc/Stand-Example-Scripts/e86ed2c4b0d9c1fcb0574aff47454d9db8836778/Vehicle Spawn.pluto",
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
		"priority" => PRIORITY_GIMMICK,
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
		"type" => "library",
		"version" => "1.14.8",
		"author" => "jerry123",
		"files" => [
			"lib/JSlangLib.lua" => "raw.githubusercontent.com/Jerrrry123/JerryScript/1.14.8/lib/JSlangLib.lua",
		],
	],
	"lua/JSkeyLib" => [
		"type" => "library",
		"version" => "1.14.5",
		"author" => "jerry123",
		"files" => [
			"lib/JSkeyLib.lua" => "raw.githubusercontent.com/Jerrrry123/JerryScript/1.14.5/lib/JSkeyLib.lua",
		],
	],
	"lua/ScaleformLib" => [
		"type" => "library",
		"version" => "r1",
		"author" => "aaronlink127",
		"files" => [
			"lib/ScaleformLib.lua" => "stand.gg/dl/lua/lib/ScaleformLib.lua"
		]
	],
	"lua/LazScript" => [
		"priority" => PRIORITY_USEFUL_UNPOPULAR,
		"author" => "LAZ13",
		"description" => "Great for people who want additional vehicle appearance options. This also includes LAZDrift.",
		"version" => "1.3",
		"depends" => [
			"lua/natives-3095a"
		],
		"files" => [
			"LazScript.lua" => "raw.githubusercontent.com/leandrocoding/lazscript/v1.3/LAZScript.lua"
		]
	],
	"lua/MusinessBanager" => [
		"priority" => PRIORITY_USEFUL_POPULAR,
		"author" => "Stand Development Team; formerly ICYPhoenix & Ren",
		"version" => "3bdbf03",
		"files" => [
			"MusinessBanager.lua" => "raw.githubusercontent.com/calamity-inc/MusinessBanager/3bdbf037470e6cf081d72f2e62c4b44bec96749f/MusinessBanagersource.lua",
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
		"version" => "3.4.3",
		"depends" => [
			"lua/natives-1681379138",
		],
		"files" => [
			"Heist Control.lua" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.4.3/Heist Control.lua",
			"store/Heist Control/Language/Chinese.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.4.3/store/Heist Control/Language/Chinese.txt",
			"store/Heist Control/Language/Custom.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.4.3/store/Heist Control/Language/Custom.txt",
			"store/Heist Control/Language/English.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.4.3/store/Heist Control/Language/English.txt",
			"store/Heist Control/Language/French.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.4.3/store/Heist Control/Language/French.txt",
			"store/Heist Control/Language/German.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.4.3/store/Heist Control/Language/German.txt",
			"store/Heist Control/Language/Italian.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.4.3/store/Heist Control/Language/Italian.txt",
			"store/Heist Control/Language/Japanese.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.4.3/store/Heist Control/Language/Japanese.txt",
			"store/Heist Control/Language/Korean.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.4.3/store/Heist Control/Language/Korean.txt",
			"store/Heist Control/Language/Polish.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.4.3/store/Heist Control/Language/Polish.txt",
			"store/Heist Control/Language/Portuguese.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.4.3/store/Heist Control/Language/Portuguese.txt",
			"store/Heist Control/Language/Russian.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.4.3/store/Heist Control/Language/Russian.txt",
			"store/Heist Control/Language/Spanish.txt" => "raw.githubusercontent.com/IceDoomfist/Stand-Heist-Control/v3.4.3/store/Heist Control/Language/Spanish.txt",
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
			"lua/natives-3095a"
		],
		"version" => "0.51",
		"files" => [
			"JinxScript.pluto" => "raw.githubusercontent.com/Prisuhm/JinxScript/33630048272b09db607ea64bbddbe2a777fbaa49/JinxScript.pluto",
		],
	],
	"lua/AcjokerScript" => [
		"priority" => PRIORITY_BLOATWARE,
		"author" => "acjoker8818",
		"version" => "0.38.0-40ae18a",
		"depends" => [
			"lua/natives-2944a",
			"lua/ScaleformLib",
			"lua/quaternionLib",
			"lua/pretty.json",
		],
		"files" => [
			"AcjokerScript.pluto" => "raw.githubusercontent.com/calamity-inc/AcjokerScript/40ae18acc36715f0a38887a6ebdfca19fb4cad01/AcjokerScript.pluto",
			"resources/AcjokerScript/ACJSTables.pluto" => "raw.githubusercontent.com/calamity-inc/AcjokerScript/40ae18acc36715f0a38887a6ebdfca19fb4cad01/resources/AcjokerScript/ACJSTables.pluto",
			"resources/AcjokerScript/translations.pluto" => "raw.githubusercontent.com/calamity-inc/AcjokerScript/40ae18acc36715f0a38887a6ebdfca19fb4cad01/resources/AcjokerScript/translations.pluto",
			"resources/AcjokerScript/Modules/Bodyguards.pluto" => "raw.githubusercontent.com/calamity-inc/AcjokerScript/40ae18acc36715f0a38887a6ebdfca19fb4cad01/resources/AcjokerScript/Modules/Bodyguards.pluto",
			"resources/AcjokerScript/Modules/Functions.pluto" => "raw.githubusercontent.com/calamity-inc/AcjokerScript/40ae18acc36715f0a38887a6ebdfca19fb4cad01/resources/AcjokerScript/Modules/Functions.pluto",
			"resources/AcjokerScript/Modules/Online.pluto" => "raw.githubusercontent.com/calamity-inc/AcjokerScript/40ae18acc36715f0a38887a6ebdfca19fb4cad01/resources/AcjokerScript/Modules/Online.pluto",
			"resources/AcjokerScript/Modules/Players.pluto" => "raw.githubusercontent.com/calamity-inc/AcjokerScript/40ae18acc36715f0a38887a6ebdfca19fb4cad01/resources/AcjokerScript/Modules/Players.pluto",
			"resources/AcjokerScript/Modules/Scaleform.pluto" => "raw.githubusercontent.com/calamity-inc/AcjokerScript/40ae18acc36715f0a38887a6ebdfca19fb4cad01/resources/AcjokerScript/Modules/Scaleform.pluto",
			"resources/AcjokerScript/Modules/Self.pluto" => "raw.githubusercontent.com/calamity-inc/AcjokerScript/40ae18acc36715f0a38887a6ebdfca19fb4cad01/resources/AcjokerScript/Modules/Self.pluto",
			"resources/AcjokerScript/Modules/Settings.pluto" => "raw.githubusercontent.com/calamity-inc/AcjokerScript/40ae18acc36715f0a38887a6ebdfca19fb4cad01/resources/AcjokerScript/Modules/Settings.pluto",
			"resources/AcjokerScript/Modules/Vehicles.pluto" => "raw.githubusercontent.com/calamity-inc/AcjokerScript/40ae18acc36715f0a38887a6ebdfca19fb4cad01/resources/AcjokerScript/Modules/Vehicles.pluto",
			"resources/AcjokerScript/Modules/Advanced Homing Missiles.pluto" => "raw.githubusercontent.com/calamity-inc/AcjokerScript/40ae18acc36715f0a38887a6ebdfca19fb4cad01/resources/AcjokerScript/Modules/Advanced Homing Missiles.pluto",
			"resources/AcjokerScript/Modules/Vehicle Spawning.pluto" => "raw.githubusercontent.com/calamity-inc/AcjokerScript/40ae18acc36715f0a38887a6ebdfca19fb4cad01/resources/AcjokerScript/Modules/Vehicle Spawning.pluto",
			"resources/AcjokerScript/Modules/Weapons.pluto" => "raw.githubusercontent.com/calamity-inc/AcjokerScript/40ae18acc36715f0a38887a6ebdfca19fb4cad01/resources/AcjokerScript/Modules/Weapons.pluto",
			"resources/AcjokerScript/Modules/Globals.pluto" => "raw.githubusercontent.com/calamity-inc/AcjokerScript/40ae18acc36715f0a38887a6ebdfca19fb4cad01/resources/AcjokerScript/Modules/Globals.pluto",
			"resources/AcjokerScript/Modules/Vehicle Neons.pluto" => "raw.githubusercontent.com/calamity-inc/AcjokerScript/40ae18acc36715f0a38887a6ebdfca19fb4cad01/resources/AcjokerScript/Modules/Vehicle Neons.pluto",
			"resources/AcjokerScript/Modules/Languages/de.pluto" => "raw.githubusercontent.com/calamity-inc/AcjokerScript/40ae18acc36715f0a38887a6ebdfca19fb4cad01/resources/AcjokerScript/Modules/Languages/de.pluto",
			"resources/AcjokerScript/Modules/Languages/es.pluto" => "raw.githubusercontent.com/calamity-inc/AcjokerScript/40ae18acc36715f0a38887a6ebdfca19fb4cad01/resources/AcjokerScript/Modules/Languages/es.pluto",
			"resources/AcjokerScript/Modules/Languages/fr.pluto" => "raw.githubusercontent.com/calamity-inc/AcjokerScript/40ae18acc36715f0a38887a6ebdfca19fb4cad01/resources/AcjokerScript/Modules/Languages/fr.pluto",
			"resources/AcjokerScript/Modules/Languages/ko.pluto" => "raw.githubusercontent.com/calamity-inc/AcjokerScript/40ae18acc36715f0a38887a6ebdfca19fb4cad01/resources/AcjokerScript/Modules/Languages/ko.pluto",
			"resources/AcjokerScript/Modules/Languages/lt.pluto" => "raw.githubusercontent.com/calamity-inc/AcjokerScript/40ae18acc36715f0a38887a6ebdfca19fb4cad01/resources/AcjokerScript/Modules/Languages/lt.pluto",
			"resources/AcjokerScript/Modules/Languages/nl.pluto" => "raw.githubusercontent.com/calamity-inc/AcjokerScript/40ae18acc36715f0a38887a6ebdfca19fb4cad01/resources/AcjokerScript/Modules/Languages/nl.pluto",
			"resources/AcjokerScript/Modules/Languages/pl.pluto" => "raw.githubusercontent.com/calamity-inc/AcjokerScript/40ae18acc36715f0a38887a6ebdfca19fb4cad01/resources/AcjokerScript/Modules/Languages/pl.pluto",
			"resources/AcjokerScript/Modules/Languages/pt.pluto" => "raw.githubusercontent.com/calamity-inc/AcjokerScript/40ae18acc36715f0a38887a6ebdfca19fb4cad01/resources/AcjokerScript/Modules/Languages/pt.pluto",
			"resources/AcjokerScript/Modules/Languages/ru.pluto" => "raw.githubusercontent.com/calamity-inc/AcjokerScript/40ae18acc36715f0a38887a6ebdfca19fb4cad01/resources/AcjokerScript/Modules/Languages/ru.pluto",
			"resources/AcjokerScript/Modules/Languages/zh.pluto" => "raw.githubusercontent.com/calamity-inc/AcjokerScript/40ae18acc36715f0a38887a6ebdfca19fb4cad01/resources/AcjokerScript/Modules/Languages/zh.pluto",
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
		"type" => "library",
		"author" => "Paul Chakravarti, Manoel Campos da Silva Filho",
		"version" => "1.6-1",
		"files" => [
			"lib/xml2lua.lua" => "raw.githubusercontent.com/manoelcampos/xml2lua/v1.6-1/xml2lua.lua",
			"lib/XmlParser.lua" => "raw.githubusercontent.com/manoelcampos/xml2lua/v1.6-1/XmlParser.lua"
		]
	],
	"lua/xml2lua-handler-tree" => [
		"type" => "library",
		"author" => "Paul Chakravarti, Manoel Campos da Silva Filho",
		"version" => "1.6-1",
		"files" => [
			"lib/xmlhandler/tree.lua" => "raw.githubusercontent.com/manoelcampos/xml2lua/v1.6-1/xmlhandler/tree.lua"
		]
	],
	"lua/inspect" => [
		"type" => "library",
		"author" => "Enrique García Cota",
		"version" => "3.1.0",
		"files" => [
			"lib/inspect.lua" => "stand.gg/dl/lua/lib/inspect.lua"
		]
	],
	"lua/quaternionLib" => [
		"type" => "library",
		"author" => "Murten",
		"files" => [
			"lib/quaternionLib.lua" => "stand.gg/dl/lua/lib/quaternionLib.lua"
		]
	],
	"lua/Constructor" => [
		"priority" => PRIORITY_USEFUL_POPULAR,
		"author" => "hexarobi",
		"description" => "Load and edit custom map, vehicle and skin files in JSON, XML or INI format.",
		"version" => "0.51.2r",
		"depends" => [
			"lua/natives-3095a",
			"lua/iniparser",
			"lua/xml2lua",
			"lua/xml2lua-handler-tree",
			"lua/inspect",
			"lua/quaternionLib",
			"lua/ScaleformLib",
			"lua/auto-updater",
		],
		"files" => [
			"Constructor.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-constructor/58c082c534e20528e24cdd07c556801db73535fa/Constructor.lua",
			"lib/constructor/constants.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-constructor/93ad4684606008fa8b19841f252fd92f9ac124d5/lib/constructor/constants.lua",
			"lib/constructor/constructor_lib.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-constructor/58c082c534e20528e24cdd07c556801db73535fa/lib/constructor/constructor_lib.lua",
			"lib/constructor/convertors.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-constructor/58c082c534e20528e24cdd07c556801db73535fa/lib/constructor/convertors.lua",
			"lib/constructor/translations.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-constructor/93ad4684606008fa8b19841f252fd92f9ac124d5/lib/constructor/translations.lua",
		],
		"resources_version" => "r3",
		"resources" => [
			"lib/constructor/constructor_logo.png" => "raw.githubusercontent.com/hexarobi/stand-lua-constructor/5a5dfeb7086c9e9a023b037a0f647a93b838838f/lib/constructor/constructor_logo.png",
			"lib/constructor/curated_attachments.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-constructor/5a5dfeb7086c9e9a023b037a0f647a93b838838f/lib/constructor/curated_attachments.lua",
			"lib/constructor/objects_complete.txt" => "raw.githubusercontent.com/hexarobi/stand-lua-constructor/5a5dfeb7086c9e9a023b037a0f647a93b838838f/lib/constructor/objects_complete.txt",
		],
		"trash" => [
			"Constructs Installer.lua",
			"../Constructs/Curated",
			"../Constructs",
		],
	],
	"lua/auto-updater" => [
		"type" => "library",
		"author" => "hexarobi",
		"version" => "2.12r",
		"files" => [
			"lib/auto-updater.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-auto-updater/b644a777fa83ac48295f5beecce21e39117ec74f/auto-updater.lua",
		],
	],
	"lua/NovaScript" => [
		"priority" => PRIORITY_BLOATWARE,
		"author" => "Nova",
		"version" => "1.2.2-d8a2d9d",
		"depends" => [
			"lua/ScaleformLib",
		],
		"files" => [
			"NovaScript.pluto" => "raw.githubusercontent.com/calamity-inc/NovaScript/d8a2d9df5e1d62934db319ce03471057fefabe0f/NovaScript.pluto",
			"lib/NovaScript/Modules/self.pluto" => "raw.githubusercontent.com/calamity-inc/NovaScript/d8a2d9df5e1d62934db319ce03471057fefabe0f/lib/NovaScript/Modules/self.pluto",
			"lib/NovaScript/Modules/online.pluto" => "raw.githubusercontent.com/calamity-inc/NovaScript/d8a2d9df5e1d62934db319ce03471057fefabe0f/lib/NovaScript/Modules/online.pluto",
			"lib/NovaScript/Modules/vehicle.pluto" => "raw.githubusercontent.com/calamity-inc/NovaScript/d8a2d9df5e1d62934db319ce03471057fefabe0f/lib/NovaScript/Modules/vehicle.pluto",
			"lib/NovaScript/Modules/weapon.pluto" => "raw.githubusercontent.com/calamity-inc/NovaScript/d8a2d9df5e1d62934db319ce03471057fefabe0f/lib/NovaScript/Modules/weapon.pluto",
			"lib/NovaScript/Modules/world.pluto" => "raw.githubusercontent.com/calamity-inc/NovaScript/d8a2d9df5e1d62934db319ce03471057fefabe0f/lib/NovaScript/Modules/world.pluto",
			"lib/NovaScript/Modules/bodyguards.pluto" => "raw.githubusercontent.com/calamity-inc/NovaScript/d8a2d9df5e1d62934db319ce03471057fefabe0f/lib/NovaScript/Modules/bodyguards.pluto",
			"lib/NovaScript/Modules/player_menu.pluto" => "raw.githubusercontent.com/calamity-inc/NovaScript/d8a2d9df5e1d62934db319ce03471057fefabe0f/lib/NovaScript/Modules/player_menu.pluto",
			"lib/NovaScript/functions.pluto" => "raw.githubusercontent.com/calamity-inc/NovaScript/d8a2d9df5e1d62934db319ce03471057fefabe0f/lib/NovaScript/functions.pluto",
			"lib/NovaScript/tables.pluto" => "raw.githubusercontent.com/calamity-inc/NovaScript/d8a2d9df5e1d62934db319ce03471057fefabe0f/lib/NovaScript/tables.pluto",
			"lib/NovaScript/NovaScript_natives.pluto" => "raw.githubusercontent.com/calamity-inc/NovaScript/d8a2d9df5e1d62934db319ce03471057fefabe0f/lib/NovaScript/NovaScript_natives.pluto",
			"lib/NovaScript/NovaS_translations.pluto" => "raw.githubusercontent.com/calamity-inc/NovaScript/d8a2d9df5e1d62934db319ce03471057fefabe0f/lib/NovaScript/NovaS_translations.pluto",
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
		"version" => "1.2.0",
		"description" => "Allows you to send detections, classifications, player list, and in-game chat to a Discord webhook.",
		"depends" => [
			"lua/natives-1681379138"
		],
		"files" => [
			"NovaHook.pluto" => "raw.githubusercontent.com/NovaPlays134/NovaHook/1.2.0/NovaHook.pluto",
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
		"version" => "0.28.2r",
		"depends" => [
			"lua/natives-1663599433"
		],
		"files" => [
			"SlotBot.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-slotbot/19a684abcac9a737e414a9c9f822c5a8def5eb78/SlotBot.lua"
		],
	],
	"lua/TriviaBot" => [
		"author" => "hexarobi",
		"description" => "Ask Jeopardy trivia questions in lobby and reward correct answers.",
		"version" => "0.9r",
		"depends" => [
			"lua/natives-3095a",
		],
		"files" => [
			"TriviaBot.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-triviabot/8246fd8853c427ee74a297daebccbf8dd4e1f20e/TriviaBot.lua",
		],
		"resources" => [
			"resources/TriviaBot/kids_teen.tsv" => "raw.githubusercontent.com/hexarobi/stand-lua-triviabot/089e6173039f2ec2e845e29573c9d075305f1371/resources/TriviaBot/kids_teen.tsv",
			"resources/TriviaBot/master_season1-35.tsv" => "raw.githubusercontent.com/hexarobi/stand-lua-triviabot/089e6173039f2ec2e845e29573c9d075305f1371/resources/TriviaBot/master_season1-35.tsv",
		],
	],
	"lua/luaffi" => [
		"type" => "library",
		"author" => "Calamity, Inc.",
		"version" => "0.1.1",
		"files" => [
			"lib/luaffi.dll" => "calamity.zip/luaffi/0.1.1/luaffi.dll"
		]
	],
	"lua/Soup" => [
		"type" => "library",
		"author" => "Calamity, Inc.",
		"depends" => [
			"lua/luaffi"
		],
		"version" => "a695db3",
		"files" => [
			"lib/soup/init.lua" => "calamity.zip/stand-soup-ffi-init.lua",
			"lib/soup/soup-apigen.lua" => "raw.githubusercontent.com/calamity-inc/Soup/a695db321b758f21c80ddeacdf65cded56c739b0/bindings/soup-apigen.lua",
			"lib/soup/soup.dll" => "calamity.zip/soup/2023-12-11-a695db321b758f21c80ddeacdf65cded56c739b0/soup.dll"
		]
	],
	"lua_compat_layer/Kiddion's Modest Menu" => [
		"author" => "Calamity, Inc.",
		"version" => "a695db3",
		"files" => [
			"lib/kiddions_compat.pluto" => "raw.githubusercontent.com/calamity-inc/kiddions_compat/efe2f15445f18cf70dd01ef29b464c4e8907de6a/kiddions_compat.pluto",
		]
	],
	"lua/Ji9sw - Gun Van" => [
		"priority" => PRIORITY_USEFUL_UNPOPULAR,
		"author" => "Ji9sw",
		"version" => "1.68",
		"depends" => [
			"lua/natives-3095a"
		],
		"files" => [
			"Ji9sw - Gun Van.lua" => "stand.gg/dl/lua/Ji9sw - Gun Van.lua"
		],
	],
	"lua/ChatCommander" => [
		"priority" => PRIORITY_GIMMICK,
		"author" => "hexarobi",
		"description" => "Advanced chat commands. Includes fine grained access controls, additional vehicle commands, and help system.",
		"version" => "0.19.1r",
		"depends" => [
			"lua/natives-3095a"
		],
		"files" => [
			"ChatCommander.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/eca565ca9b1aff98ae6e09e380f22d22bfac14ef/ChatCommander.lua",
			"lib/chat_commander/config.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/chat_commander/config.lua",
			"lib/chat_commander/constants.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/chat_commander/constants.lua",
			"lib/chat_commander/item_browser.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/chat_commander/item_browser.lua",
			"lib/chat_commander/user_database.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/chat_commander/user_database.lua",
			"lib/chat_commander/utils.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/chat_commander/utils.lua",
			"lib/chat_commander/vehicle_utils.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/chat_commander/vehicle_utils.lua",
			"lib/file_database.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/file_database.lua",
			"lib/ChatCommands/other/event.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/other/event.lua",
			"lib/ChatCommands/other/kick.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/other/kick.lua",
			"lib/ChatCommands/other/newlobby.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/other/newlobby.lua",
			"lib/ChatCommands/other/ping.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/other/ping.lua",
			"lib/ChatCommands/other/roulette.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/other/roulette.lua",
			"lib/ChatCommands/player/allguns.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/player/allguns.lua",
			"lib/ChatCommands/player/ammo.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/player/ammo.lua",
			"lib/ChatCommands/player/autoheal.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/player/autoheal.lua",
			"lib/ChatCommands/player/bail.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/player/bail.lua",
			"lib/ChatCommands/player/casino.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/player/casino.lua",
			"lib/ChatCommands/player/ceopay.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/player/ceopay.lua",
			"lib/ChatCommands/player/cleanup.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/player/cleanup.lua",
			"lib/ChatCommands/player/collectibles.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/player/collectibles.lua",
			"lib/ChatCommands/player/escape.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/player/escape.lua",
			"lib/ChatCommands/player/levelup.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/player/levelup.lua",
			"lib/ChatCommands/player/parachute.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/player/parachute.lua",
			"lib/ChatCommands/player/stuntjump.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/player/stuntjump.lua",
			"lib/ChatCommands/player/teleport.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/player/teleport.lua",
			"lib/ChatCommands/player/unstick.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/player/unstick.lua",
			"lib/ChatCommands/player/vip.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/player/vip.lua",
			"lib/ChatCommands/player/wanted.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/player/wanted.lua",
			"lib/ChatCommands/vehicle/copy.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/vehicle/copy.lua",
			"lib/ChatCommands/vehicle/deletevehicle.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/vehicle/deletevehicle.lua",
			"lib/ChatCommands/vehicle/fast.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/vehicle/fast.lua",
			"lib/ChatCommands/vehicle/fav.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/vehicle/fav.lua",
			"lib/ChatCommands/vehicle/gift.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/vehicle/gift.lua",
			"lib/ChatCommands/vehicle/headlights.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/vehicle/headlights.lua",
			"lib/ChatCommands/vehicle/horn.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/vehicle/horn.lua",
			"lib/ChatCommands/vehicle/livery.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/vehicle/livery.lua",
			"lib/ChatCommands/vehicle/mods.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/vehicle/mods.lua",
			"lib/ChatCommands/vehicle/modsmax.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/vehicle/modsmax.lua",
			"lib/ChatCommands/vehicle/neonlights.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/vehicle/neonlights.lua",
			"lib/ChatCommands/vehicle/paint.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/vehicle/paint.lua",
			"lib/ChatCommands/vehicle/plate.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/vehicle/plate.lua",
			"lib/ChatCommands/vehicle/platetype.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/vehicle/platetype.lua",
			"lib/ChatCommands/vehicle/repair.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/vehicle/repair.lua",
			"lib/ChatCommands/vehicle/shuffle.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/vehicle/shuffle.lua",
			"lib/ChatCommands/vehicle/spawn.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/vehicle/spawn.lua",
			"lib/ChatCommands/vehicle/tires.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/vehicle/tires.lua",
			"lib/ChatCommands/vehicle/tiresmoke.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/vehicle/tiresmoke.lua",
			"lib/ChatCommands/vehicle/tune.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/vehicle/tune.lua",
			"lib/ChatCommands/vehicle/wash.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/vehicle/wash.lua",
			"lib/ChatCommands/vehicle/wheelcolor.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/vehicle/wheelcolor.lua",
			"lib/ChatCommands/vehicle/wheels.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/vehicle/wheels.lua",
			"lib/ChatCommands/vehicle/windowtint.lua" => "raw.githubusercontent.com/hexarobi/stand-lua-chatcommander/f3c6ce624b38ad6dc4c49a0ce92b6bdca56b540b/lib/ChatCommands/vehicle/windowtint.lua"
		],
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
			"type" => "library",
			"priority" => PRIORITY_RESOURCES,
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
