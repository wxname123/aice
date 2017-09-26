<?php
class Text_Pinyin
{
	private static $dictionary =  array (
				  'zuo' => '-10254',
				  'zun' => '-10256',
				  'zui' => '-10260',
				  'zuan' => '-10262',
				  'zu' => '-10270',
				  'zou' => '-10274',
				  'zong' => '-10281',
				  'zi' => '-10296',
				  'zhuo' => '-10307',
				  'zhun' => '-10309',
				  'zhui' => '-10315',
				  'zhuang' => '-10322',
				  'zhuan' => '-10328',
				  'zhuai' => '-10329',
				  'zhua' => '-10331',
				  'zhu' => '-10519',
				  'zhou' => '-10533',
				  'zhong' => '-10544',
				  'zhi' => '-10587',
				  'zheng' => '-10764',
				  'zhen' => '-10780',
				  'zhe' => '-10790',
				  'zhao' => '-10800',
				  'zhang' => '-10815',
				  'zhan' => '-10832',
				  'zhai' => '-10838',
				  'zha' => '-11014',
				  'zeng' => '-11018',
				  'zen' => '-11019',
				  'zei' => '-11020',
				  'ze' => '-11024',
				  'zao' => '-11038',
				  'zang' => '-11041',
				  'zan' => '-11045',
				  'zai' => '-11052',
				  'za' => '-11055',
				  'yun' => '-11067',
				  'yue' => '-11077',
				  'yuan' => '-11097',
				  'yu' => '-11303',
				  'you' => '-11324',
				  'yong' => '-11339',
				  'yo' => '-11340',
				  'ying' => '-11358',
				  'yin' => '-11536',
				  'yi' => '-11589',
				  'ye' => '-11604',
				  'yao' => '-11781',
				  'yang' => '-11798',
				  'yan' => '-11831',
				  'ya' => '-11847',
				  'xun' => '-11861',
				  'xue' => '-11867',
				  'xuan' => '-12039',
				  'xu' => '-12058',
				  'xiu' => '-12067',
				  'xiong' => '-12074',
				  'xing' => '-12089',
				  'xin' => '-12099',
				  'xie' => '-12120',
				  'xiao' => '-12300',
				  'xiang' => '-12320',
				  'xian' => '-12346',
				  'xia' => '-12359',
				  'xi' => '-12556',
				  'wu' => '-12585',
				  'wo' => '-12594',
				  'weng' => '-12597',
				  'wen' => '-12607',
				  'wei' => '-12802',
				  'wang' => '-12812',
				  'wan' => '-12829',
				  'wai' => '-12831',
				  'wa' => '-12838',
				  'tuo' => '-12849',
				  'tun' => '-12852',
				  'tui' => '-12858',
				  'tuan' => '-12860',
				  'tu' => '-12871',
				  'tou' => '-12875',
				  'tong' => '-12888',
				  'ting' => '-13060',
				  'tie' => '-13063',
				  'tiao' => '-13068',
				  'tian' => '-13076',
				  'ti' => '-13091',
				  'teng' => '-13095',
				  'te' => '-13096',
				  'tao' => '-13107',
				  'tang' => '-13120',
				  'tan' => '-13138',
				  'tai' => '-13147',
				  'ta' => '-13318',
				  'suo' => '-13326',
				  'sun' => '-13329',
				  'sui' => '-13340',
				  'suan' => '-13343',
				  'su' => '-13356',
				  'sou' => '-13359',
				  'song' => '-13367',
				  'si' => '-13383',
				  'shuo' => '-13387',
				  'shun' => '-13391',
				  'shui' => '-13395',
				  'shuang' => '-13398',
				  'shuan' => '-13400',
				  'shuai' => '-13404',
				  'shua' => '-13406',
				  'shu' => '-13601',
				  'shou' => '-13611',
				  'shi' => '-13658',
				  'sheng' => '-13831',
				  'shen' => '-13847',
				  'she' => '-13859',
				  'shao' => '-13870',
				  'shang' => '-13878',
				  'shan' => '-13894',
				  'shai' => '-13896',
				  'sha' => '-13905',
				  'seng' => '-13906',
				  'sen' => '-13907',
				  'se' => '-13910',
				  'sao' => '-13914',
				  'sang' => '-13917',
				  'san' => '-14083',
				  'sai' => '-14087',
				  'sa' => '-14090',
				  'ruo' => '-14092',
				  'run' => '-14094',
				  'rui' => '-14097',
				  'ruan' => '-14099',
				  'ru' => '-14109',
				  'rou' => '-14112',
				  'rong' => '-14122',
				  'ri' => '-14123',
				  'reng' => '-14125',
				  'ren' => '-14135',
				  're' => '-14137',
				  'rao' => '-14140',
				  'rang' => '-14145',
				  'ran' => '-14149',
				  'qun' => '-14151',
				  'que' => '-14159',
				  'quan' => '-14170',
				  'qu' => '-14345',
				  'qiu' => '-14353',
				  'qiong' => '-14355',
				  'qing' => '-14368',
				  'qin' => '-14379',
				  'qie' => '-14384',
				  'qiao' => '-14399',
				  'qiang' => '-14407',
				  'qian' => '-14429',
				  'qia' => '-14594',
				  'qi' => '-14630',
				  'pu' => '-14645',
				  'po' => '-14654',
				  'ping' => '-14663',
				  'pin' => '-14668',
				  'pie' => '-14670',
				  'piao' => '-14674',
				  'pian' => '-14678',
				  'pi' => '-14857',
				  'peng' => '-14871',
				  'pen' => '-14873',
				  'pei' => '-14882',
				  'pao' => '-14889',
				  'pang' => '-14894',
				  'pan' => '-14902',
				  'pai' => '-14908',
				  'pa' => '-14914',
				  'ou' => '-14921',
				  'o' => '-14922',
				  'nuo' => '-14926',
				  'nue' => '-14928',
				  'nuan' => '-14929',
				  'nv' => '-14930',
				  'nu' => '-14933',
				  'nong' => '-14937',
				  'niu' => '-14941',
				  'ning' => '-15109',
				  'nin' => '-15110',
				  'nie' => '-15117',
				  'niao' => '-15119',
				  'niang' => '-15121',
				  'nian' => '-15128',
				  'ni' => '-15139',
				  'neng' => '-15140',
				  'nen' => '-15141',
				  'nei' => '-15143',
				  'ne' => '-15144',
				  'nao' => '-15149',
				  'nang' => '-15150',
				  'nan' => '-15153',
				  'nai' => '-15158',
				  'na' => '-15165',
				  'mu' => '-15180',
				  'mou' => '-15183',
				  'mo' => '-15362',
				  'miu' => '-15363',
				  'ming' => '-15369',
				  'min' => '-15375',
				  'mie' => '-15377',
				  'miao' => '-15385',
				  'mian' => '-15394',
				  'mi' => '-15408',
				  'meng' => '-15416',
				  'men' => '-15419',
				  'mei' => '-15435',
				  'me' => '-15436',
				  'mao' => '-15448',
				  'mang' => '-15454',
				  'man' => '-15625',
				  'mai' => '-15631',
				  'ma' => '-15640',
				  'luo' => '-15652',
				  'lun' => '-15659',
				  'lue' => '-15661',
				  'luan' => '-15667',
				  'lv' => '-15681',
				  'lu' => '-15701',
				  'lou' => '-15707',
				  'long' => '-15878',
				  'liu' => '-15889',
				  'ling' => '-15903',
				  'lin' => '-15915',
				  'lie' => '-15920',
				  'liao' => '-15933',
				  'liang' => '-15944',
				  'lian' => '-15958',
				  'lia' => '-15959',
				  'li' => '-16155',
				  'leng' => '-16158',
				  'lei' => '-16169',
				  'le' => '-16171',
				  'lao' => '-16180',
				  'lang' => '-16187',
				  'lan' => '-16202',
				  'lai' => '-16205',
				  'la' => '-16212',
				  'kuo' => '-16216',
				  'kun' => '-16220',
				  'kui' => '-16393',
				  'kuang' => '-16401',
				  'kuan' => '-16403',
				  'kuai' => '-16407',
				  'kua' => '-16412',
				  'ku' => '-16419',
				  'kou' => '-16423',
				  'kong' => '-16427',
				  'keng' => '-16429',
				  'ken' => '-16433',
				  'ke' => '-16448',
				  'kao' => '-16452',
				  'kang' => '-16459',
				  'kan' => '-16465',
				  'kai' => '-16470',
				  'ka' => '-16474',
				  'jun' => '-16647',
				  'jue' => '-16657',
				  'juan' => '-16664',
				  'ju' => '-16689',
				  'jiu' => '-16706',
				  'jiong' => '-16708',
				  'jing' => '-16733',
				  'jin' => '-16915',
				  'jie' => '-16942',
				  'jiao' => '-16970',
				  'jiang' => '-16983',
				  'jian' => '-17185',
				  'jia' => '-17202',
				  'ji' => '-17417',
				  'huo' => '-17427',
				  'hun' => '-17433',
				  'hui' => '-17454',
				  'huang' => '-17468',
				  'huan' => '-17482',
				  'huai' => '-17487',
				  'hua' => '-17496',
				  'hu' => '-17676',
				  'hou' => '-17683',
				  'hong' => '-17692',
				  'heng' => '-17697',
				  'hen' => '-17701',
				  'hei' => '-17703',
				  'he' => '-17721',
				  'hao' => '-17730',
				  'hang' => '-17733',
				  'han' => '-17752',
				  'hai' => '-17759',
				  'ha' => '-17922',
				  'guo' => '-17928',
				  'gun' => '-17931',
				  'gui' => '-17947',
				  'guang' => '-17950',
				  'guan' => '-17961',
				  'guai' => '-17964',
				  'gua' => '-17970',
				  'gu' => '-17988',
				  'gou' => '-17997',
				  'gong' => '-18012',
				  'geng' => '-18181',
				  'gen' => '-18183',
				  'gei' => '-18184',
				  'ge' => '-18201',
				  'gao' => '-18211',
				  'gang' => '-18220',
				  'gan' => '-18231',
				  'gai' => '-18237',
				  'ga' => '-18239',
				  'fu' => '-18446',
				  'fou' => '-18447',
				  'fo' => '-18448',
				  'feng' => '-18463',
				  'fen' => '-18478',
				  'fei' => '-18490',
				  'fang' => '-18501',
				  'fan' => '-18518',
				  'fa' => '-18526',
				  'er' => '-18696',
				  'en' => '-18697',
				  'e' => '-18710',
				  'duo' => '-18722',
				  'dun' => '-18731',
				  'dui' => '-18735',
				  'duan' => '-18741',
				  'du' => '-18756',
				  'dou' => '-18763',
				  'dong' => '-18773',
				  'diu' => '-18774',
				  'ding' => '-18783',
				  'die' => '-18952',
				  'diao' => '-18961',
				  'dian' => '-18977',
				  'di' => '-18996',
				  'deng' => '-19003',
				  'de' => '-19006',
				  'dao' => '-19018',
				  'dang' => '-19023',
				  'dan' => '-19038',
				  'dai' => '-19212',
				  'da' => '-19218',
				  'cuo' => '-19224',
				  'cun' => '-19227',
				  'cui' => '-19235',
				  'cuan' => '-19238',
				  'cu' => '-19242',
				  'cou' => '-19243',
				  'cong' => '-19249',
				  'ci' => '-19261',
				  'chuo' => '-19263',
				  'chun' => '-19270',
				  'chui' => '-19275',
				  'chuang' => '-19281',
				  'chuan' => '-19288',
				  'chuai' => '-19289',
				  'chu' => '-19467',
				  'chou' => '-19479',
				  'chong' => '-19484',
				  'chi' => '-19500',
				  'cheng' => '-19515',
				  'chen' => '-19525',
				  'che' => '-19531',
				  'chao' => '-19540',
				  'chang' => '-19715',
				  'chan' => '-19725',
				  'chai' => '-19728',
				  'cha' => '-19739',
				  'ceng' => '-19741',
				  'ce' => '-19746',
				  'cao' => '-19751',
				  'cang' => '-19756',
				  'can' => '-19763',
				  'cai' => '-19774',
				  'ca' => '-19775',
				  'bu' => '-19784',
				  'bo' => '-19805',
				  'bing' => '-19976',
				  'bin' => '-19982',
				  'bie' => '-19986',
				  'biao' => '-19990',
				  'bian' => '-20002',
				  'bi' => '-20026',
				  'beng' => '-20032',
				  'ben' => '-20036',
				  'bei' => '-20051',
				  'bao' => '-20230',
				  'bang' => '-20242',
				  'ban' => '-20257',
				  'bai' => '-20265',
				  'ba' => '-20283',
				  'ao' => '-20292',
				  'ang' => '-20295',
				  'an' => '-20304',
				  'ai' => '-20317',
				  'a' => '-20319',
				);  //文字

	public static function pinyin($string, $PPS='-', $code='UTF-8')
	{
			if($code != 'gb2312')
			{
				$string = mb_convert_encoding($string, 'GBK', 'UTF-8');
			}

			$res_str = '';
			$pps_str = '';

			for($i=0; $i<strlen($string); $i++)
			{
					$ord_str = ord(substr($string, $i, 1));

					if($ord_str > 160)
					{
						$_Q = ord(substr($string, ++$i, 1)); $ord_str = $ord_str*256 + $_Q - 65536;
					}

					$res_str .= $pps_str . self::transform($ord_str);
					$pps_str = $PPS;
			}

			//return preg_replace("/[^a-z0-9]*/", '', $res_str);
			//return preg_replace("/[^a-zA-Z0-9]*/", '', $res_str);
			return $res_str;
	}

	public static function transform($num)
	{
			if ($num>0 && $num<160)
			{
				return chr($num);
			}
			elseif($num<-20319 || $num>-10247)
			{
				return '';
			}
			else
			{
				foreach(self::$dictionary as $k=>$v)
				{
					if($v <= $num)
					{
						break;
					}
				}

				return $k;
			}
	}

	public static function _U2_Utf8_Gb($_C)
	{
		/*
		$string = ''; 
		if($_C < 0x80) $string .= $_C; 
		elseif($_C < 0x800) 
		{ 
				$string .= chr(0xC0 | $_C>>6); 


				$string .= chr(0x80 | $_C & 0x3F); 
		}elseif($_C < 0x10000){ 
				$string .= chr(0xE0 | $_C>>12); 
				$string .= chr(0x80 | $_C>>6 & 0x3F); 
				$string .= chr(0x80 | $_C & 0x3F); 
		} elseif($_C < 0x200000) { 
				$string .= chr(0xF0 | $_C>>18);  
				$string .= chr(0x80 | $_C>>12 & 0x3F); 
				$string .= chr(0x80 | $_C>>6 & 0x3F); 
				$string .= chr(0x80 | $_C & 0x3F); 
		} 
		*/
		return mb_convert_encoding($string, "GBK", "UTF-8");

		//return iconv('UTF-8', 'GBK', $string); 
	}


	public static function getPinyinPermalink($str_title, $PPS='-')
	{
		$dictPinyin = array('A' => '啊阿吖嗄锕', 'Ai' => '埃挨哎唉哀皑癌蔼矮艾碍爱隘捱嗳嫒瑷暧砹锿霭', 'An' => '鞍氨安俺按暗岸胺案谙埯揞庵桉铵鹌黯', 'Ang' => '肮昂盎', 'Ao' => '凹敖熬翱袄傲奥懊澳坳拗嗷岙廒遨媪骜獒聱螯鏊鳌鏖', 'Ba' => '芭捌扒叭吧笆八疤巴拔跋靶把坝霸罢爸茇菝岜灞钯粑鲅魃', 'Bai' => '白柏百摆佰败拜稗捭掰', 'Ban' => '斑班搬扳般颁板版扮拌伴瓣半办绊阪坂钣瘢癍舨', 'Bang' => '邦帮梆榜膀绑棒磅蚌镑傍谤蒡浜', 'Bao' => '苞胞包褒薄雹保堡饱宝抱报暴豹鲍爆曝勹葆孢煲鸨褓趵龅', 'Bei' => '杯碑悲卑北辈背贝钡倍狈备惫焙被孛陂邶蓓呗悖碚鹎褙鐾鞴', 'Ben' => '奔苯本笨畚坌锛', 'Beng' => '崩绷甭泵蹦迸嘣甏', 'Bi' => '逼鼻比鄙笔彼碧蓖蔽毕毙毖币庇痹闭敝弊必壁臂避陛匕俾荜荸萆薜吡哔狴庳愎滗濞弼妣婢嬖璧贲睥畀铋秕裨筚箅篦舭襞跸髀', 'Bian' => '鞭边编贬扁便变卞辨辩辫遍匾弁苄忭汴缏煸砭碥窆褊蝙笾鳊', 'Biao' => '标彪膘表婊骠飑飙飚镖镳瘭裱鳔', 'Bie' => '鳖憋别瘪蹩', 'Bin' => '彬斌濒滨宾摈傧豳缤玢殡膑镔髌鬓', 'Bing' => '兵冰柄丙秉饼炳病并禀邴摒槟', 'Bo' => '剥玻菠播拨钵波博勃搏铂箔伯帛舶脖膊渤泊驳卜亳啵饽檗擘礴钹鹁簸跛踣', 'Bu' => '捕哺补埠不布步簿部怖卟逋瓿晡钚钸醭', 'Ca' => '擦礤', 'Cai' => '猜裁材才财睬踩采彩菜蔡', 'Can' => '餐参蚕残惭惨灿孱骖璨粲黪', 'Cang' => '苍舱仓沧藏伧', 'Cao' => '操糙槽曹草嘈漕螬艚', 'Ce' => '厕策侧册测恻', 'Cen' => '岑涔', 'Ceng' => '层蹭曾噌', 'Cha' => '插叉茬茶查碴搽察岔差诧嚓猹馇汊姹杈槎檫锸镲衩', 'Chai' => '拆柴豺侪钗瘥虿', 'Chan' => '搀掺蝉馋谗缠铲产阐颤冁谄蒇廛忏潺澶羼婵骣觇禅蟾躔', 'Chang' => '昌猖场尝常长偿肠厂敞畅唱倡伥鬯苌菖徜怅阊娼嫦昶氅鲳', 'Chao' => '超抄钞朝嘲潮巢吵炒怊晁焯耖', 'Che' => '车扯撤掣彻澈坼砗', 'Chen' => '郴臣辰尘晨忱沉陈趁衬谌谶抻嗔宸琛榇碜龀', 'Cheng' => '撑称城橙成呈乘程惩澄诚承逞骋秤丞埕枨柽塍瞠铖裎蛏酲', 'Chi' => '吃痴持池迟弛驰耻齿侈尺赤翅斥炽傺墀茌叱哧啻嗤彳饬媸敕眵鸱瘛褫蚩螭笞篪豉踟魑', 'Chong' => '充冲虫崇宠茺忡憧铳舂艟', 'Chou' => '抽酬畴踌稠愁筹仇绸瞅丑臭俦帱惆瘳雠', 'Chu' => '初出橱厨躇锄雏滁除楚础储矗搐触处畜亍刍怵憷绌杵楮樗褚蜍蹰黜', 'Chuai' => '揣搋啜膪踹', 'Chuan' => '川穿椽传船喘串舛遄氚钏舡', 'Chuang' => '疮窗床闯创怆', 'Chui' => '吹炊捶锤垂陲棰槌', 'Chun' => '春椿醇唇淳纯蠢莼鹑蝽', 'Chuo' => '戳绰辍踔龊', 'Ci' => '疵茨磁雌辞慈瓷词此刺赐次茈祠鹚糍', 'Cong' => '聪葱囱匆从丛苁淙骢琮璁枞', 'Cou' => '凑楱辏腠', 'Cu' => '粗醋簇促蔟徂猝殂蹙蹴', 'Cuan' => '蹿篡窜汆撺爨镩', 'Cui' => '摧崔催脆瘁粹淬翠萃啐悴璀榱毳', 'Cun' => '村存寸忖皴', 'Cuo' => '磋撮搓措挫错厝嵯脞锉矬痤鹾蹉', 'Da' => '搭达答瘩打大耷哒嗒怛妲沓褡笪靼鞑', 'Dai' => '呆歹傣戴带殆代贷袋待逮怠埭甙呔岱迨绐玳黛', 'Dan' => '耽担丹单郸掸胆旦氮但惮淡诞弹蛋儋凼萏菪啖澹宕殚赕眈疸瘅聃箪', 'Dang' => '当挡党荡档谠砀铛裆', 'Dao' => '刀捣蹈倒岛祷导到稻悼道盗叨氘焘纛', 'De' => '德得的锝', 'Deng' => '蹬灯登等瞪凳邓噔嶝戥磴镫簦', 'Di' => '堤低滴迪敌笛狄涤翟嫡抵底地蒂第帝弟递缔氐籴诋谛邸坻荻嘀娣柢棣觌祗砥碲睇镝羝骶', 'Dia' => '嗲', 'Dian' => '颠掂滇碘点典靛垫电佃甸店惦奠淀殿丶阽坫巅玷钿癜癫簟踮', 'Diao' => '碉叼雕凋刁掉吊钓调铞貂鲷', 'Die' => '跌爹碟蝶迭谍叠垤堞揲喋牒瓞耋鲽', 'Ding' => '丁盯叮钉顶鼎锭定订仃啶玎腚碇町疔耵酊', 'Diu' => '丢铥', 'Dong' => '东冬董懂动栋侗恫冻洞垌咚岽峒氡胨胴硐鸫', 'Dou' => '兜抖斗陡豆逗痘都蔸钭窦蚪篼', 'Du' => '督毒犊独读堵睹赌杜镀肚度渡妒芏嘟渎椟牍蠹笃髑黩', 'Duan' => '端短锻段断缎椴煅簖', 'Dui' => '堆兑队对怼憝碓镦', 'Dun' => '墩吨蹲敦顿钝盾遁沌炖砘礅盹趸', 'Duo' => '掇哆多夺垛躲朵跺舵剁惰堕咄哚沲缍铎裰踱', 'E' => '蛾峨鹅俄额讹娥恶厄扼遏鄂饿噩谔垩苊莪萼呃愕屙婀轭腭锇锷鹗颚鳄', 'Ei' => '诶', 'En' => '恩蒽摁嗯', 'Er' => '而儿耳尔饵洱二贰迩珥铒鸸鲕', 'Fa' => '发罚筏伐乏阀法珐垡砝', 'Fan' => '藩帆番翻樊矾钒繁凡烦反返范贩犯饭泛蕃蘩幡梵燔畈蹯', 'Fang' => '坊芳方肪房防妨仿访纺放邡枋钫舫鲂', 'Fei' => '菲非啡飞肥匪诽吠肺废沸费芾狒悱淝妃绯榧腓斐扉砩镄痱蜚篚翡霏鲱', 'Fen' => '芬酚吩氛分纷坟焚汾粉奋份忿愤粪偾瀵棼鲼鼢', 'Feng' => '丰封枫蜂峰锋风疯烽逢冯缝讽奉凤俸酆葑唪沣砜', 'Fo' => '佛', 'Fou' => '否缶', 'Fu' => '夫敷肤孵扶拂辐幅氟符伏俘服浮涪福袱弗甫抚辅俯釜斧脯腑府腐赴副覆赋复傅付阜父腹负富讣附妇缚咐匐凫郛芙苻茯莩菔拊呋呒幞怫滏艴孚驸绂绋桴赙祓黻黼罘稃馥蚨蜉蝠蝮麸趺跗鲋鳆', 'Ga' => '噶嘎垓尬尕尜旮钆', 'Gai' => '该改概钙盖溉丐陔戤赅', 'Gan' => '干甘杆柑竿肝赶感秆敢赣坩苷尴擀泔淦澉绀橄旰矸疳酐', 'Gang' => '冈刚钢缸肛纲岗港杠戆罡筻', 'Gao' => '篙皋高膏羔糕搞镐稿告睾诰郜藁缟槔槁杲锆', 'Ge' => '哥歌搁戈鸽胳疙割革葛格蛤阁隔铬个各咯鬲仡哿圪塥嗝纥搿膈硌镉袼虼舸骼', 'Gei' => '给', 'Gen' => '根跟亘茛哏艮', 'Geng' => '耕更庚羹埂耿梗哽赓绠鲠', 'Gong' => '工攻功恭龚供躬公宫弓巩汞拱贡共珙肱蚣觥', 'Gou' => '钩勾沟苟狗垢构购够佝诟岣遘媾缑枸觏彀笱篝鞲', 'Gu' => '辜菇咕箍估沽孤姑鼓古蛊骨谷股故顾固雇嘏诂菰崮汩梏轱牯牿臌毂瞽罟钴锢鸪痼蛄酤觚鲴', 'Gua' => '刮瓜剐寡挂褂卦诖呱栝胍鸹', 'Guai' => '乖拐怪', 'Guan' => '棺关官冠观管馆罐惯灌贯倌莞掼涫盥鹳鳏', 'Guang' => '光广逛咣犷桄胱', 'Gui' => '瑰规圭硅归龟闺轨鬼诡癸桂柜跪贵刽匦刿庋宄妫炅晷皈簋鲑鳜', 'Gun' => '辊滚棍衮绲磙鲧', 'Guo' => '锅郭国果裹过馘埚掴呙帼崞猓椁虢聒蜾蝈', 'Ha' => '哈铪', 'Hai' => '骸孩海氦亥害骇嗨胲醢', 'Han' => '酣憨邯韩含涵寒函喊罕翰撼捍旱憾悍焊汗汉邗菡撖犴阚瀚晗焓顸颔蚶鼾', 'Hang' => '夯杭航沆绗颃', 'Hao' => '壕嚎豪毫郝好耗号浩蒿薅嗥嚆濠灏昊皓颢蚝', 'He' => '呵喝荷菏核禾和何合盒貉阂河涸赫褐鹤贺诃劾壑嗬阖曷盍颌蚵翮', 'Hei' => '嘿黑', 'Hen' => '痕很狠恨', 'Heng' => '哼亨横衡恒蘅珩桁', 'Hong' => '轰哄烘虹鸿洪宏弘红黉訇讧荭蕻薨闳泓', 'Hou' => '喉侯猴吼厚候后堠後逅瘊篌糇鲎骺', 'Hu' => '呼乎忽瑚壶葫胡蝴狐糊湖弧虎唬护互沪户冱唿囫岵猢怙惚浒滹琥槲轷觳烀煳戽扈祜瓠鹄鹕鹱笏醐斛鹘', 'Hua' => '花哗华猾滑画划化话骅桦砉铧', 'Huai' => '槐徊怀淮坏踝', 'Huan' => '欢环桓还缓换患唤痪豢焕涣宦幻奂擐獾洹浣漶寰逭缳锾鲩鬟', 'Huang' => '荒慌黄磺蝗簧皇凰惶煌晃幌恍谎隍徨湟潢遑璜肓癀蟥篁鳇', 'Hui' => '灰挥辉徽恢蛔回毁悔慧卉惠晦贿秽会烩汇讳诲绘诙茴荟蕙咴喙隳洄彗缋桧晖恚虺蟪麾', 'Hun' => '荤昏婚魂浑混诨馄阍溷珲', 'Huo' => '豁活伙火获或惑霍货祸劐藿攉嚯夥钬锪镬耠蠖', 'Ji' => '击圾基机畸稽积箕肌饥迹激讥鸡姬绩缉吉极棘辑籍集及急疾汲即嫉级挤几脊己蓟技冀季伎祭剂悸济寄寂计记既忌际妓继纪藉亟乩剞佶偈墼芨芰荠蒺蕺掎叽咭哜唧岌嵴洎屐骥畿玑楫殛戟戢赍觊犄齑矶羁嵇稷瘠虮笈笄暨跻跽霁鲚鲫髻麂', 'Jia' => '嘉枷夹佳家加荚颊贾甲钾假稼价架驾嫁伽郏葭岬浃迦珈戛胛恝铗镓痂瘕蛱笳袈跏', 'Jian' => '歼监坚尖笺间煎兼肩艰奸缄茧检柬碱硷拣捡简俭剪减荐槛鉴践贱见键箭件健舰剑饯渐溅涧建僭谏谫菅蒹搛湔蹇謇缣枧楗戋戬牮犍毽腱睑锏鹣裥笕翦踺鲣鞯', 'Jiang' => '僵姜将浆江疆蒋桨奖讲匠酱降茳洚绛缰犟礓耩糨豇', 'Jiao' => '蕉椒礁焦胶交郊浇骄娇嚼搅铰矫侥脚狡角饺缴绞剿教酵轿较叫窖佼僬艽茭挢噍徼姣敫皎鹪蛟醮跤鲛', 'Jie' => '揭接皆秸街阶截劫节桔杰捷睫竭洁结解姐戒芥界借介疥诫届讦诘拮喈嗟婕孑桀碣疖颉蚧羯鲒骱', 'Jin' => '巾筋斤金今津襟紧锦仅谨进靳晋禁近烬浸尽劲卺荩堇噤馑廑妗缙瑾槿赆觐衿矜', 'Jing' => '荆兢茎睛晶鲸京惊精粳经井警景颈静境敬镜径痉靖竟竞净刭儆阱菁獍憬泾迳弪婧肼胫腈旌箐', 'Jiong' => '炯窘迥扃', 'Jiu' => '揪究纠玖韭久灸九酒厩救旧臼舅咎就疚僦啾阄柩桕鸠鹫赳鬏', 'Ju' => '鞠拘狙疽居驹菊局咀矩举沮聚拒据巨具距踞锯俱句惧炬剧倨讵苣苴莒掬遽屦琚椐榘榉橘犋飓钜锔窭裾醵踽龃雎鞫', 'Juan' => '捐鹃娟倦眷卷绢鄄狷涓桊蠲锩镌隽', 'Jue' => '撅攫抉掘倔爵觉决诀绝厥劂谲矍蕨噘崛獗孓珏桷橛爝镢蹶觖', 'Jun' => '均菌钧军君峻俊竣浚郡骏捃皲', 'Ka' => '喀咖卡佧咔胩', 'Kai' => '开揩楷凯慨剀垲蒈忾恺铠锎锴', 'Kan' => '刊堪勘坎砍看侃莰戡龛瞰', 'Kang' => '康慷糠扛抗亢炕伉闶钪', 'Kao' => '考拷烤靠尻栲犒铐', 'Ke' => '坷苛柯棵磕颗科壳咳可渴克刻客课嗑岢恪溘骒缂珂轲氪瞌钶锞稞疴窠颏蝌髁', 'Ken' => '肯啃垦恳裉', 'Keng' => '坑吭铿', 'Kong' => '空恐孔控倥崆箜', 'Kou' => '抠口扣寇芤蔻叩囗眍筘', 'Ku' => '枯哭窟苦酷库裤刳堀喾绔骷', 'Kua' => '夸垮挎跨胯侉', 'Kuai' => '块筷侩快蒯郐哙狯浍脍', 'Kuan' => '宽款髋', 'Kuang' => '匡筐狂框矿眶旷况诓诳邝圹夼哐纩贶', 'Kui' => '亏盔岿窥葵奎魁傀馈愧溃馗匮夔隗蒉揆喹喟悝愦逵暌睽聩蝰篑跬', 'Kun' => '坤昆捆困悃阃琨锟醌鲲髡', 'Kuo' => '括扩廓阔蛞', 'La' => '垃拉喇蜡腊辣啦剌邋旯砬瘌', 'Lai' => '莱来赖崃徕涞濑赉睐铼癞籁', 'Lan' => '蓝婪栏拦篮阑兰澜谰揽览懒缆烂滥岚漤榄斓罱镧褴', 'Lang' => '琅榔狼廊郎朗浪蒗啷阆稂螂', 'Lao' => '捞劳牢老佬姥酪烙涝唠崂忉栳铑铹痨耢醪', 'Le' => '勒乐了仂叻泐鳓', 'Lei' => '雷镭蕾磊累儡垒擂肋类泪羸诔嘞嫘缧檑耒酹', 'Leng' => '棱楞冷塄愣', 'Li' => '厘梨犁黎篱狸离漓理李里鲤礼莉荔吏栗丽厉励砾历利傈例俐痢立粒沥隶力璃哩俪俚郦坜苈莅蓠藜呖唳喱猁溧澧逦娌嫠骊缡枥栎轹膦戾砺詈罹锂鹂疠疬蛎蜊蠡笠篥粝醴跞雳鲡鳢黧', 'Lian' => '联莲连镰廉怜涟帘敛脸链恋炼练蔹奁潋濂琏楝殓臁裢裣蠊鲢', 'Liang' => '俩粮凉梁粱良两辆量晾亮谅墚莨椋锒踉靓魉', 'Liao' => '撩聊僚疗燎寥辽潦撂镣廖料蓼尥嘹獠寮缭钌鹩', 'Lie' => '列裂烈劣猎冽埒捩咧洌趔躐鬣', 'Lin' => '琳林磷霖临邻鳞淋凛赁吝拎蔺啉嶙廪懔遴檩辚瞵粼躏麟', 'Ling' => '玲菱零龄铃伶羚凌灵陵岭领另令酃苓呤囹泠绫柃棂瓴聆蛉翎鲮', 'Liu' => '溜琉榴硫馏留刘瘤流柳六浏遛骝绺旒熘锍镏鹨鎏', 'Long' => '龙聋咙笼窿隆垄拢陇垅茏泷珑栊胧砻癃', 'Lou' => '楼娄搂篓漏陋偻蒌喽嵝镂瘘耧蝼髅', 'Lu' => '芦卢颅庐炉掳卤虏鲁麓碌露路赂鹿潞禄录陆戮垆撸噜泸渌漉逯璐栌橹轳辂辘氇胪镥鸬鹭簏舻鲈', 'Luan' => '峦挛孪滦卵乱脔娈栾鸾銮', 'Lue' => '掠略锊', 'Lun' => '抡轮伦仑沦纶论囵', 'Luo' => '萝螺罗逻锣箩骡裸落洛骆络倮蠃荦摞猡泺漯珞椤脶镙瘰雒', 'Lv' => '驴吕铝侣旅履屡缕虑氯律滤绿捋闾榈膂稆褛', 'Ma' => '妈麻玛码蚂马骂嘛吗唛犸杩蟆', 'Mai' => '埋买麦卖迈脉劢荬霾', 'Man' => '瞒馒蛮满蔓曼慢漫谩墁幔缦熳镘颟螨鳗鞔', 'Mang' => '芒茫盲氓忙莽邙漭硭蟒', 'Mao' => '猫茅锚毛矛铆卯茂冒帽貌贸袤茆峁泖瑁昴牦耄旄懋瞀蝥蟊髦', 'Me' => '么麽', 'Mei' => '玫枚梅酶霉煤没眉媒镁每美昧寐妹媚莓嵋猸浼湄楣镅鹛袂魅', 'Men' => '门闷们扪焖懑钔', 'Meng' => '萌蒙檬盟锰猛梦孟勐甍瞢懵朦礞虻蜢蠓艋艨', 'Mi' => '眯醚靡糜迷谜弥米秘觅泌蜜密幂芈谧咪嘧猕汨宓弭脒祢敉縻麋', 'Mian' => '棉眠绵冕免勉娩缅面沔渑湎腼眄', 'Miao' => '苗描瞄藐秒渺庙妙喵邈缈杪淼眇鹋', 'Mie' => '蔑灭乜咩蠛篾', 'Min' => '民抿皿敏悯闽苠岷闵泯缗玟珉愍黾鳘', 'Ming' => '明螟鸣铭名命冥茗溟暝瞑酩', 'Miu' => '谬缪', 'Mo' => '摸摹蘑模膜磨摩魔抹末莫墨默沫漠寞陌谟茉蓦馍嫫嬷殁镆秣瘼耱貊貘', 'Mou' => '谋牟某侔哞眸蛑鍪', 'Mu' => '拇牡亩姆母墓暮幕募慕木目睦牧穆仫坶苜沐毪钼', 'Na' => '拿哪呐钠那娜纳讷捺肭镎衲', 'Nai' => '氖乃奶耐奈鼐佴艿萘柰', 'Nan' => '南男难喃囝囡楠腩蝻赧', 'Nang' => '囊攮囔馕曩', 'Nao' => '挠脑恼闹淖孬垴呶猱瑙硇铙蛲', 'Ne' => '呢', 'Nei' => '馁内', 'Nen' => '嫩恁', 'Neng' => '能', 'Ni' => '妮霓倪泥尼拟你匿腻逆溺伲坭蘼猊怩昵旎睨铌鲵', 'Nian' => '蔫拈年碾撵捻念廿埝辇黏鲇鲶', 'Niang' => '娘酿', 'Niao' => '鸟尿茑嬲脲袅', 'Nie' => '捏聂孽啮镊镍涅陧蘖嗫颞臬蹑', 'Nin' => '您', 'Ning' => '柠狞凝宁拧泞佞咛甯聍', 'Niu' => '牛扭钮纽狃忸妞', 'Nong' => '脓浓农弄侬哝', 'Nou' => '耨', 'Nu' => '奴努怒弩胬孥驽', 'Nuan' => '暖', 'Nue' => '虐疟挪', 'Nuo' => '懦糯诺傩搦喏锘', 'Nv' => '女恧钕衄', 'O' => '哦噢', 'Ou' => '欧鸥殴藕呕偶沤讴怄瓯耦', 'Pa' => '耙啪趴爬帕怕琶葩杷筢', 'Pai' => '拍排牌徘湃派俳蒎哌', 'Pan' => '攀潘盘磐盼畔判叛拚爿泮袢襻蟠蹒', 'Pang' => '乓庞旁耪胖彷滂逄螃', 'Pao' => '抛咆刨炮袍跑泡匏狍庖脬疱', 'Pei' => '呸胚培裴赔陪配佩沛辔帔旆锫醅霈', 'Pen' => '喷盆湓', 'Peng' => '砰抨烹澎彭蓬棚硼篷膨朋鹏捧碰堋嘭怦蟛', 'Pi' => '辟坯砒霹批披劈琵毗啤脾疲皮匹痞僻屁譬丕仳陴邳郫圮埤鼙芘擗噼庀淠媲纰枇甓罴铍癖疋蚍蜱貔', 'Pian' => '篇偏片骗谝骈犏胼翩蹁', 'Piao' => '飘漂瓢票剽嘌嫖缥殍瞟螵', 'Pie' => '撇瞥丿苤氕', 'Pin' => '拼频贫品聘姘嫔榀牝颦', 'Ping' => '乒坪苹萍平凭瓶评屏俜娉枰鲆', 'Po' => '坡泼颇婆破魄迫粕叵鄱珀钋钷皤笸', 'Pou' => '剖裒掊', 'Pu' => '扑铺仆莆葡菩蒲埔朴圃普浦谱瀑匍噗溥濮璞氆镤镨蹼', 'Qi' => '期欺戚妻七凄漆柒沏其棋奇歧畦崎脐齐旗祈祁骑起岂乞企启契砌器气迄弃汽泣讫亓圻芑芪萁萋葺蕲嘁屺岐汔淇骐绮琪琦杞桤槭耆祺憩碛颀蛴蜞綦鳍麒', 'Qia' => '掐恰洽葜袷髂', 'Qian' => '牵扦钎铅千迁签仟谦乾黔钱钳前潜遣浅谴堑嵌欠歉倩佥阡芊芡掮岍悭慊骞搴褰缱椠肷愆钤虔箝', 'Qiang' => '枪呛腔羌墙蔷强抢戕嫱樯戗炝锖锵镪襁蜣羟跄', 'Qiao' => '橇锹敲悄桥瞧乔侨巧鞘撬翘峭俏窍劁诮谯荞峤愀憔缲樵硗跷鞒', 'Qie' => '切茄且怯窃郄惬妾挈锲箧趄', 'Qin' => '钦侵亲秦琴勤芹擒禽寝沁芩揿吣嗪噙溱檎锓螓衾', 'Qing' => '青轻氢倾卿清擎晴氰情顷请庆苘圊檠磬蜻罄綮謦鲭黥', 'Qiong' => '琼穷邛茕穹蛩筇跫銎', 'Qiu' => '秋丘邱球求囚酋泅俅巯犰湫逑遒楸赇虬蚯蝤裘糗鳅鼽', 'Qu' => '趋区蛆曲躯屈驱渠取娶龋趣去诎劬蕖蘧岖衢阒璩觑氍朐祛磲鸲癯蛐蠼麴瞿黢', 'Quan' => '圈颧权醛泉全痊拳犬券劝诠荃犭悛绻辁畎铨蜷筌鬈', 'Que' => '缺炔瘸却鹊榷确雀阕阙悫', 'Qun' => '裙群逡麇', 'Ran' => '然燃冉染苒蚺髯', 'Rang' => '瓤壤攘嚷让禳穰', 'Rao' => '饶扰绕荛娆桡', 'Re' => '惹热', 'Ren' => '壬仁人忍韧任认刃妊纫仞荏饪轫稔衽', 'Reng' => '扔仍', 'Ri' => '日', 'Rong' => '戎茸蓉荣融熔溶容绒冗嵘狨榕肜蝾', 'Rou' => '揉柔肉糅蹂鞣', 'Ru' => '茹蠕儒孺如辱乳汝入褥蓐薷嚅洳溽濡缛铷襦颥', 'Ruan' => '软阮朊', 'Rui' => '蕊瑞锐芮蕤枘睿蚋', 'Run' => '闰润', 'Ruo' => '若弱偌箬', 'Sa' => '撒洒萨卅挲脎飒', 'Sai' => '腮鳃塞赛噻', 'San' => '三叁伞散仨彡馓毵', 'Sang' => '桑嗓丧搡磉颡', 'Sao' => '搔骚扫嫂埽缫臊瘙鳋', 'Se' => '瑟色涩啬铯穑', 'Sen' => '森', 'Seng' => '僧', 'Sha' => '莎砂杀刹沙纱傻啥煞唼歃铩痧裟霎鲨', 'Shai' => '筛晒酾', 'Shan' => '珊苫杉山删煽衫闪陕擅赡膳善汕扇缮栅讪鄯芟潸姗嬗骟膻钐疝蟮舢跚鳝', 'Shang' => '墒伤商赏晌上尚裳垧绱殇熵觞', 'Shao' => '梢捎稍烧芍勺韶少哨邵绍劭潲杓蛸筲艄', 'She' => '奢赊蛇舌舍赦摄射慑涉社设厍佘猞滠畲麝', 'Shen' => '砷申呻伸身深娠绅神沈审婶甚肾慎渗什诜谂莘葚哂渖胂矧蜃糁', 'Sheng' => '声生甥牲升绳省盛剩胜圣嵊晟眚笙', 'Shi' => '匙师失狮施湿诗尸虱十石拾时食蚀实识史矢使屎驶始式示士世柿事拭誓逝势是嗜噬适仕侍释饰氏市恃室视试谥埘莳蓍弑轼贳炻礻铈舐筮豕鲥鲺', 'Shou' => '收手首守寿授售受瘦兽狩绶艏', 'Shu' => '蔬枢梳殊抒输叔舒淑疏书赎孰熟薯暑曙署蜀黍鼠属术述树束戍竖墅庶数漱恕丨倏塾菽摅沭澍姝纾毹腧殳秫', 'Shua' => '刷耍唰', 'Shuai' => '率摔衰甩帅蟀', 'Shuan' => '栓拴闩涮', 'Shuang' => '霜双爽孀', 'Shui' => '谁水睡税', 'Shun' => '吮瞬顺舜', 'Shuo' => '说硕朔烁蒴搠妁槊铄', 'Si' => '斯撕嘶思私司丝死肆寺嗣四伺似饲巳厮俟兕厶咝汜泗澌姒驷缌祀锶鸶耜蛳笥', 'Song' => '松耸怂颂送宋讼诵凇菘崧嵩忪悚淞竦', 'Sou' => '搜艘擞嗽叟薮嗖嗾馊溲飕瞍锼螋', 'Su' => '苏酥俗素速粟僳塑溯宿诉肃夙谡蔌嗉愫涑簌觫稣', 'Suan' => '酸蒜算狻', 'Sui' => '虽隋随绥髓碎岁穗遂隧祟谇荽濉邃燧眭睢', 'Sun' => '孙损笋荪狲飧榫隼', 'Suo' => '蓑梭唆缩琐索锁所唢嗦嗍娑桫睃羧', 'Ta' => '塌他它她塔獭挞蹋踏闼溻遢榻铊趿鳎', 'Tai' => '胎苔抬台泰酞太态汰邰薹骀肽炱钛跆鲐', 'Tan' => '坍摊贪瘫滩坛檀痰潭谭谈坦毯袒碳探叹炭郯昙忐钽锬覃', 'Tang' => '汤塘搪堂棠膛唐糖倘躺淌趟烫傥帑惝溏瑭樘铴镗耥螗螳羰醣', 'Tao' => '掏涛滔绦萄桃逃淘陶讨套鼗啕洮韬饕', 'Te' => '特忒忑慝铽', 'Teng' => '藤腾疼誊滕', 'Ti' => '梯剔踢锑提题蹄啼体替嚏惕涕剃屉倜悌逖绨缇鹈醍', 'Tian' => '天添填田甜恬舔腆掭忝阗殄畋', 'Tiao' => '挑条迢眺跳佻苕祧窕蜩笤粜龆鲦髫', 'Tie' => '贴铁帖萜餮', 'Ting' => '厅听烃汀廷停亭庭挺艇莛葶婷梃铤蜓霆', 'Tong' => '通桐酮瞳同铜彤童桶捅筒统痛佟仝茼嗵恸潼砼', 'Tou' => '偷投头透骰', 'Tu' => '凸秃突图徒途涂屠土吐兔堍荼菟钍酴', 'Tuan' => '湍团抟彖疃', 'Tui' => '推颓腿蜕褪退煺', 'Tun' => '囤吞屯臀氽饨暾豚', 'Tuo' => '拖托脱鸵陀驮驼椭妥拓唾佗坨庹沱柝柁橐砣箨酡跎鼍', 'Wa' => '挖哇蛙洼娃瓦袜佤娲腽', 'Wai' => '歪外崴', 'Wan' => '豌弯湾玩顽丸烷完碗挽晚皖惋宛婉万腕剜芄菀纨绾琬脘畹蜿', 'Wang' => '汪王亡枉网往旺望忘妄罔惘辋魍', 'Wei' => '威巍微危韦违桅围唯惟为潍维苇萎委伟伪尾纬未蔚味畏胃喂魏位渭谓尉慰卫偎诿隈圩葳薇帏帷嵬猥猬闱沩洧涠逶娓玮韪軎炜煨痿艉鲔', 'Wen' => '瘟温蚊文闻纹吻稳紊问刎夂阌汶璺攵雯', 'Weng' => '嗡翁瓮蓊蕹', 'Wo' => '挝蜗涡窝我斡卧握沃倭莴喔幄渥肟硪龌', 'Wu' => '巫呜钨乌污诬屋无芜梧吾吴毋武五捂午舞伍侮坞戊雾晤物勿务悟误兀仵阢邬圬芴唔庑怃忤寤迕妩婺骛杌牾焐鹉鹜痦蜈鋈鼯', 'Xi' => '栖昔熙析西硒矽晰嘻吸锡牺稀息希悉膝夕惜熄烯溪汐犀檄袭席习媳喜铣洗系隙戏细僖兮隰郗茜菥葸蓰奚唏徙饩阋浠淅屣嬉玺樨曦觋欷歙熹禊禧皙穸裼蜥螅蟋舄舾羲粞翕醯蹊鼷', 'Xia' => '瞎虾匣霞辖暇峡侠狭下厦夏吓呷狎遐瑕柙硖罅黠', 'Xian' => '掀锨先仙鲜纤咸贤衔舷闲涎弦嫌显险现献县腺馅羡宪陷限线冼苋莶藓岘猃暹娴氙燹祆鹇痫蚬筅籼酰跣跹霰', 'Xiang' => '相厢镶香箱襄湘乡翔祥详想响享项巷橡像向象芗葙饷庠骧缃蟓鲞飨', 'Xiao' => '萧硝霄削哮嚣销消宵淆晓小孝校肖啸笑效哓崤潇逍骁绡枭枵筱箫魈', 'Xie' => '楔些歇蝎鞋协挟携邪斜胁谐写械卸蟹懈泄泻谢屑偕亵勰燮薤撷獬廨渫瀣邂绁缬榭榍蹀躞', 'Xin' => '薪芯锌欣辛新忻心信衅囟馨昕歆镡鑫', 'Xing' => '星腥猩惺兴刑型形邢行醒幸杏性姓陉荇荥擤饧悻硎', 'Xiong' => '兄凶胸匈汹雄熊芎', 'Xiu' => '休修羞朽嗅锈秀袖绣咻岫馐庥溴鸺貅髹', 'Xu' => '墟戌需虚嘘须徐许蓄酗叙旭序恤絮婿绪续吁诩勖蓿洫溆顼栩煦盱胥糈醑', 'Xuan' => '轩喧宣悬旋玄选癣眩绚儇谖萱揎泫渲漩璇楦暄炫煊碹铉镟痃', 'Xue' => '靴薛学穴雪血谑噱泶踅鳕', 'Xun' => '勋熏循旬询寻驯巡殉汛训讯逊迅巽郇埙荀荨蕈薰峋徇獯恂洵浔曛醺鲟', 'Ya' => '压押鸦鸭呀丫芽牙蚜崖衙涯雅哑亚讶伢垭揠岈迓娅琊桠氩砑睚痖', 'Yan' => '焉咽阉烟淹盐严研蜒岩延言颜阎炎沿奄掩眼衍演艳堰燕厌砚雁唁彦焰宴谚验厣赝剡俨偃兖谳郾鄢埏菸崦恹闫阏湮滟妍嫣琰檐晏胭腌焱罨筵酽趼魇餍鼹', 'Yang' => '殃央鸯秧杨扬佯疡羊洋阳氧仰痒养样漾徉怏泱炀烊恙蛘鞅', 'Yao' => '邀腰妖瑶摇尧遥窑谣姚咬舀药要耀钥夭爻吆崾徭幺珧杳轺曜肴铫鹞窈繇鳐', 'Ye' => '椰噎耶爷野冶也页掖业叶曳腋夜液靥谒邺揶晔烨铘', 'Yi' => '一壹医揖铱依伊衣颐夷遗移仪胰疑沂宜姨彝椅蚁倚已乙矣以艺抑易邑屹亿役臆逸肄疫亦裔意毅忆义益溢诣议谊译异翼翌绎刈劓佚佾诒圯埸懿苡荑薏弈奕挹弋呓咦咿嗌噫峄嶷猗饴怿怡悒漪迤驿缢殪轶贻欹旖熠眙钇镒镱痍瘗癔翊蜴舣羿翳酏黟', 'Yin' => '茵荫因殷音阴姻吟银淫寅饮尹引隐印胤鄞垠堙茚吲喑狺夤洇氤铟瘾窨蚓霪龈', 'Ying' => '英樱婴鹰应缨莹萤营荧蝇迎赢盈影颖硬映嬴郢茔莺萦蓥撄嘤膺滢潆瀛瑛璎楹媵鹦瘿颍罂', 'Yo' => '哟唷', 'Yong' => '拥佣臃痈庸雍踊蛹咏泳涌永恿勇用俑壅墉喁慵邕镛甬鳙饔', 'You' => '幽优悠忧尤由邮铀犹油游酉有友右佑釉诱又幼卣攸侑莠莜莸尢呦囿宥柚猷牖铕疣蚰蚴蝣鱿黝鼬', 'Yu' => '迂淤于盂榆虞愚舆余俞逾鱼愉渝渔隅予娱雨与屿禹宇语羽玉域芋郁遇喻峪御愈欲狱育誉浴寓裕预豫驭禺毓伛俣谀谕萸蓣揄圄圉嵛狳饫馀庾阈鬻妪妤纡瑜昱觎腴欤於煜燠聿钰鹆鹬瘐瘀窬窳蜮蝓竽臾舁雩龉', 'Yuan' => '鸳渊冤元垣袁原援辕园员圆猿源缘远苑愿怨院垸塬芫掾圜沅媛瑗橼爰眢鸢螈箢鼋', 'Yue' => '曰约越跃岳粤月悦阅龠哕瀹樾刖钺', 'Yun' => '耘云郧匀陨允运蕴酝晕韵孕郓芸狁恽愠纭韫殒昀氲熨筠', 'Za' => '匝砸杂咋拶咂', 'Zai' => '栽哉灾宰载再在崽甾', 'Zan' => '咱攒暂赞瓒昝簪糌趱錾', 'Zang' => '赃脏葬奘驵臧', 'Zao' => '遭糟凿藻枣早澡蚤躁噪造皂灶燥唣', 'Ze' => '责择则泽仄赜啧帻迮昃笮箦舴', 'Zei' => '贼', 'Zen' => '怎谮', 'Zeng' => '增憎赠缯甑罾锃', 'Zha' => '扎喳渣札轧铡闸眨榨乍炸诈柞揸吒咤哳楂砟痄蚱齄', 'Zhai' => '摘斋宅窄债寨砦瘵', 'Zhan' => '瞻毡詹粘沾盏斩辗崭展蘸栈占战站湛绽谵搌旃', 'Zhang' => '樟章彰漳张掌涨杖丈帐账仗胀瘴障仉鄣幛嶂獐嫜璋蟑', 'Zhao' => '招昭找沼赵照罩兆肇召诏棹钊笊', 'Zhe' => '遮折哲蛰辙者锗蔗这浙着乇谪摺柘辄磔鹧褶蜇螫赭', 'Zhen' => '珍斟真甄砧臻贞针侦枕疹诊震振镇阵帧圳蓁浈缜桢椹榛轸赈胗朕祯畛稹鸩箴', 'Zheng' => '蒸挣睁征狰争怔整拯正政症郑证诤峥徵钲铮筝', 'Zhi' => '芝枝支吱蜘知肢脂汁之织职直植殖执值侄址指止趾只旨纸志挚掷至致置帜峙制智秩稚质炙痔滞治窒卮陟郅埴芷摭帙忮彘咫骘栉枳栀桎轵轾贽胝膣祉黹雉鸷痣蛭絷酯跖踬踯豸觯', 'Zhong' => '中盅忠钟衷终种肿重仲众冢锺螽舯踵', 'Zhou' => '舟周州洲诌粥轴肘帚咒皱宙昼骤荮啁妯纣绉胄碡籀酎', 'Zhu' => '珠株蛛朱猪诸诛逐竹烛煮拄瞩嘱主著柱助蛀贮铸筑住注祝驻伫侏邾苎茱洙渚潴杼槠橥炷铢疰瘃竺箸舳翥躅麈', 'Zhua' => '抓爪', 'Zhuai' => '拽', 'Zhuan' => '专砖转撰赚篆啭馔颛', 'Zhuang' => '幢桩庄装妆撞壮状僮', 'Zhui' => '椎锥追赘坠缀萑惴骓缒隹', 'Zhun' => '谆准肫窀', 'Zhuo' => '捉拙卓桌琢茁酌啄灼浊倬诼擢浞涿濯禚斫镯', 'Zi' => '兹咨资姿滋淄孜紫仔籽滓子自渍字谘呲嵫姊孳缁梓辎赀恣眦锱秭耔笫粢趑訾龇鲻髭', 'Zong' => '鬃棕踪宗综总纵偬腙粽', 'Zou' => '邹走奏揍诹陬鄹驺鲰', 'Zu' => '租足卒族祖诅阻组俎菹镞', 'Zuan' => '钻纂攥缵躜', 'Zui' => '嘴醉最罪蕞觜', 'Zun' => '尊遵撙樽鳟', 'Zuo' => '昨左佐做作坐座阼唑嘬怍胙祚酢');
		$strRet     = '';

		//$PPS = '-';
		$PPF = 'fullword';
		$PPL = 100;


		if ($PPL > 0)
		{
			$str_title = substr($str_title, 0, $PPL);
		}
		for ($i = 0; $i < strlen($str_title); $i++)
		{
			//取一个字节
			$byte1st = ord(substr($str_title, $i, 1));
			//如果在 11100000-11101111 范围间的，说明是一个UTF-8的中文字
			if ($byte1st >= 224 && $byte1st <= 239)
			{
				//抓取整个汉字，UTF-8的汉字是3字节的
				$fullChar = substr($str_title, $i, 3);
				$i += 2;
				//在字典里查找拼音，找不到的汉字会忽略
				foreach ($dictPinyin as $pinyin => $val)
				{
					if (strpos($val, $fullChar) !== false)
					{
						if ($PPF == "fullword")
						{
							$strRet .= $PPS . $pinyin . $PPS;
						}
						else
						{
							$strRet .= $PPS . substr($pinyin, 0, 1) . $PPS;
						}
						break;
					};
				}
			}
			else
			{
				//非中文的话，把不认识的符号都转成空格
				$strRet .= preg_replace("/[^A-Za-z0-9\-]/", $PPS, chr($byte1st));
			}
		}

		if ($PPS != "")
		{
			$strRet = trim(preg_replace("/" . $PPS . "+/", $PPS, $strRet), $PPS);
		}

		return $strRet;
	}

}
?>