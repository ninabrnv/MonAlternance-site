<?php

/**
* @package   s9e\TextFormatter
* @copyright Copyright (c) 2010-2017 The s9e Authors
* @license   http://www.opensource.org/licenses/mit-license.php The MIT License
*/
class s9e_renderer_e85a5f9bd00ca1c517fc2e8ae33445e44783c4ae extends \s9e\TextFormatter\Renderer
{
	protected $params=array('L_CODE'=>'','L_COLON'=>'','L_IMAGE'=>'','L_SELECT_ALL_CODE'=>'','L_WROTE'=>'','STYLE_ID'=>'','S_VIEWFLASH'=>'','S_VIEWIMG'=>'','S_VIEWSMILIES'=>'','T_SMILIES_PATH'=>'');
	protected static $tagBranches=array('ATTACHMENT'=>0,'B'=>1,'CENTER'=>2,'CODE'=>3,'COLOR'=>4,'E'=>5,'EMAIL'=>6,'EMOJI'=>7,'FLASH'=>8,'H3'=>9,'I'=>10,'IMG'=>11,'LI'=>12,'LINK_TEXT'=>13,'LIST'=>14,'QUOTE'=>15,'RL'=>16,'br'=>16,'SIZE'=>17,'U'=>18,'URL'=>19,'YOUTUBE'=>20,'e'=>21,'i'=>21,'s'=>21,'p'=>22);
	protected static $btA66C2C3F=array('8-)'=>0,':!:'=>1,':('=>2,':)'=>3,':-('=>4,':-)'=>5,':-?'=>6,':-D'=>7,':-P'=>8,':-o'=>9,':-x'=>10,':-|'=>11,':?'=>12,':?:'=>13,':???:'=>14,':D'=>15,':P'=>16,':arrow:'=>17,':cool:'=>18,':cry:'=>19,':eek:'=>20,':evil:'=>21,':geek:'=>22,':grin:'=>23,':idea:'=>24,':lol:'=>25,':mad:'=>26,':mrgreen:'=>27,':o'=>28,':oops:'=>29,':razz:'=>30,':roll:'=>31,':sad:'=>32,':shock:'=>33,':smile:'=>34,':twisted:'=>35,':ugeek:'=>36,':wink:'=>37,':x'=>38,':|'=>39,';)'=>40,';-)'=>41);
	public function __sleep()
	{
		$props = get_object_vars($this);
		unset($props['out'], $props['proc'], $props['source']);
		return array_keys($props);
	}
	public function renderRichText($xml)
	{
		if (!isset($this->quickRenderingTest) || !preg_match($this->quickRenderingTest, $xml))
			try
			{
				return $this->renderQuick($xml);
			}
			catch (\Exception $e)
			{
			}
		$dom = $this->loadXML($xml);
		$this->out = '';
		$this->at($dom->documentElement);
		return $this->out;
	}
	protected function at(\DOMNode $root)
	{
		if ($root->nodeType === 3)
			$this->out .= htmlspecialchars($root->textContent,0);
		else
			foreach ($root->childNodes as $node)
				if (!isset(self::$tagBranches[$node->nodeName]))
					$this->at($node);
				else
				{
					$tb = self::$tagBranches[$node->nodeName];
					if($tb<12)if($tb<6)if($tb<3)if($tb===0)$this->out.='<div class="inline-attachment"><!-- ia'.htmlspecialchars($node->getAttribute('index'),0).' -->'.htmlspecialchars($node->getAttribute('filename'),0).'<!-- ia'.htmlspecialchars($node->getAttribute('index'),0).' --></div>';elseif($tb===1)if($this->params['STYLE_ID']==2||$this->params['STYLE_ID']==3||$this->params['STYLE_ID']==4||$this->params['STYLE_ID']==5||$this->params['STYLE_ID']==6||$this->params['STYLE_ID']==7||$this->params['STYLE_ID']==8){$this->out.='<strong class="text-strong">';$this->at($node);$this->out.='</strong>';}else{$this->out.='<span style="font-weight: bold">';$this->at($node);$this->out.='</span>';}else{$this->out.='<div style="text-align: center;">';$this->at($node);$this->out.='</div>';}elseif($tb===3){$this->out.='<div class="codebox"><p>'.htmlspecialchars($this->params['L_CODE'].$this->params['L_COLON'],0).' <a href="#" onclick="selectCode(this); return false;">'.htmlspecialchars($this->params['L_SELECT_ALL_CODE'],0).'</a></p><pre><code>';$this->at($node);$this->out.='</code></pre></div>';}elseif($tb===4){$this->out.='<span style="color: '.htmlspecialchars($node->getAttribute('color'),2).'">';$this->at($node);$this->out.='</span>';}elseif(empty($this->params['S_VIEWSMILIES']))$this->out.=htmlspecialchars($node->textContent,0);elseif(isset(self::$btA66C2C3F[$node->textContent])){$n=self::$btA66C2C3F[$node->textContent];$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2);if($n<21)if($n<11)if($n<6)if($n<3)if($n===0)$this->out.='/icon_cool.gif" width="15" height="17" alt="8-)" title="Décontracté">';elseif($n===1)$this->out.='/icon_exclaim.gif" width="15" height="17" alt=":!:" title="Exclamation">';else$this->out.='/icon_e_sad.gif" width="15" height="17" alt=":(" title="Triste">';elseif($n===3)$this->out.='/icon_e_smile.gif" width="15" height="17" alt=":)" title="Souriant">';elseif($n===4)$this->out.='/icon_e_sad.gif" width="15" height="17" alt=":-(" title="Triste">';else$this->out.='/icon_e_smile.gif" width="15" height="17" alt=":-)" title="Souriant">';elseif($n<9)if($n===6)$this->out.='/icon_e_confused.gif" width="15" height="17" alt=":-?" title="Confus">';elseif($n===7)$this->out.='/icon_e_biggrin.gif" width="15" height="17" alt=":-D" title="Heureux">';else$this->out.='/icon_razz.gif" width="15" height="17" alt=":-P" title="Tirant la langue">';elseif($n===9)$this->out.='/icon_e_surprised.gif" width="15" height="17" alt=":-o" title="Étonné">';else$this->out.='/icon_mad.gif" width="15" height="17" alt=":-x" title="En colère">';elseif($n<16)if($n<14)if($n===11)$this->out.='/icon_neutral.gif" width="15" height="17" alt=":-|" title="Neutre">';elseif($n===12)$this->out.='/icon_e_confused.gif" width="15" height="17" alt=":?" title="Confus">';else$this->out.='/icon_question.gif" width="15" height="17" alt=":?:" title="Interrogation">';elseif($n===14)$this->out.='/icon_e_confused.gif" width="15" height="17" alt=":???:" title="Confus">';else$this->out.='/icon_e_biggrin.gif" width="15" height="17" alt=":D" title="Heureux">';elseif($n<19)if($n===16)$this->out.='/icon_razz.gif" width="15" height="17" alt=":P" title="Tirant la langue">';elseif($n===17)$this->out.='/icon_arrow.gif" width="15" height="17" alt=":arrow:" title="Flèche">';else$this->out.='/icon_cool.gif" width="15" height="17" alt=":cool:" title="Décontracté">';elseif($n===19)$this->out.='/icon_cry.gif" width="15" height="17" alt=":cry:" title="En pleurs">';else$this->out.='/icon_e_surprised.gif" width="15" height="17" alt=":eek:" title="Étonné">';elseif($n<32)if($n<27)if($n<24)if($n===21)$this->out.='/icon_evil.gif" width="15" height="17" alt=":evil:" title="Diable en colère">';elseif($n===22)$this->out.='/icon_e_geek.gif" width="17" height="17" alt=":geek:" title="Geek">';else$this->out.='/icon_e_biggrin.gif" width="15" height="17" alt=":grin:" title="Heureux">';elseif($n===24)$this->out.='/icon_idea.gif" width="15" height="17" alt=":idea:" title="Idée">';elseif($n===25)$this->out.='/icon_lol.gif" width="15" height="17" alt=":lol:" title="Riant">';else$this->out.='/icon_mad.gif" width="15" height="17" alt=":mad:" title="En colère">';elseif($n<30)if($n===27)$this->out.='/icon_mrgreen.gif" width="15" height="17" alt=":mrgreen:" title="M. Vert">';elseif($n===28)$this->out.='/icon_e_surprised.gif" width="15" height="17" alt=":o" title="Étonné">';else$this->out.='/icon_redface.gif" width="15" height="17" alt=":oops:" title="Embarrassé">';elseif($n===30)$this->out.='/icon_razz.gif" width="15" height="17" alt=":razz:" title="Tirant la langue">';else$this->out.='/icon_rolleyes.gif" width="15" height="17" alt=":roll:" title="Roulant des yeux">';elseif($n<37)if($n<35)if($n===32)$this->out.='/icon_e_sad.gif" width="15" height="17" alt=":sad:" title="Triste">';elseif($n===33)$this->out.='/icon_eek.gif" width="15" height="17" alt=":shock:" title="Scandalisé">';else$this->out.='/icon_e_smile.gif" width="15" height="17" alt=":smile:" title="Souriant">';elseif($n===35)$this->out.='/icon_twisted.gif" width="15" height="17" alt=":twisted:" title="Diable souriant">';else$this->out.='/icon_e_ugeek.gif" width="17" height="18" alt=":ugeek:" title="Super geek">';elseif($n<40)if($n===37)$this->out.='/icon_e_wink.gif" width="15" height="17" alt=":wink:" title="Clin d’œil">';elseif($n===38)$this->out.='/icon_mad.gif" width="15" height="17" alt=":x" title="En colère">';else$this->out.='/icon_neutral.gif" width="15" height="17" alt=":|" title="Neutre">';elseif($n===40)$this->out.='/icon_e_wink.gif" width="15" height="17" alt=";)" title="Clin d’œil">';else$this->out.='/icon_e_wink.gif" width="15" height="17" alt=";-)" title="Clin d’œil">';}else$this->out.=htmlspecialchars($node->textContent,0);elseif($tb<9)if($tb===6){$this->out.='<a href="mailto:'.htmlspecialchars($node->getAttribute('email'),2);if($node->hasAttribute('subject')||$node->hasAttribute('body')){$this->out.='?';if($node->hasAttribute('subject'))$this->out.='subject='.htmlspecialchars($node->getAttribute('subject'),2);if($node->hasAttribute('body')){if($node->hasAttribute('subject'))$this->out.='&amp;';$this->out.='body='.htmlspecialchars($node->getAttribute('body'),2);}}$this->out.='">';$this->at($node);$this->out.='</a>';}elseif($tb===7)if(!empty($this->params['S_VIEWSMILIES']))$this->out.='<img alt="'.htmlspecialchars($node->textContent,2).'" class="emoji smilies" draggable="false" src="//cdn.jsdelivr.net/emojione/assets/svg/'.htmlspecialchars($node->getAttribute('seq'),2).'.svg">';else$this->out.=htmlspecialchars($node->textContent,0);elseif(!empty($this->params['S_VIEWFLASH']))$this->out.='<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="'.htmlspecialchars($node->getAttribute('width'),2).'" height="'.htmlspecialchars($node->getAttribute('height'),2).'"><param name="movie" value="'.htmlspecialchars($node->getAttribute('url'),2).'"><param name="play" value="false"><param name="loop" value="false"><param name="quality" value="high"><param name="allowScriptAccess" value="never"><param name="allowNetworking" value="internal"><embed src="'.htmlspecialchars($node->getAttribute('url'),2).'" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="'.htmlspecialchars($node->getAttribute('width'),2).'" height="'.htmlspecialchars($node->getAttribute('height'),2).'" play="false" loop="false" quality="high" allowscriptaccess="never" allownetworking="internal"></object>';else$this->at($node);elseif($tb===9){$this->out.='<h3>';$this->at($node);$this->out.='</h3>';}elseif($tb===10)if($this->params['STYLE_ID']==2||$this->params['STYLE_ID']==3||$this->params['STYLE_ID']==4||$this->params['STYLE_ID']==5||$this->params['STYLE_ID']==6||$this->params['STYLE_ID']==7||$this->params['STYLE_ID']==8){$this->out.='<em class="text-italics">';$this->at($node);$this->out.='</em>';}else{$this->out.='<span style="font-style: italic">';$this->at($node);$this->out.='</span>';}elseif(!empty($this->params['S_VIEWIMG']))$this->out.='<img src="'.htmlspecialchars($node->getAttribute('src'),2).'" class="postimage" alt="'.htmlspecialchars($this->params['L_IMAGE'],2).'">';else$this->at($node);elseif($tb<18)if($tb<15)if($tb===12){$this->out.='<li>';$this->at($node);$this->out.='</li>';}elseif($tb===13)$this->out.=htmlspecialchars($node->getAttribute('text'),0);elseif(!$node->hasAttribute('type')){$this->out.='<ul>';$this->at($node);$this->out.='</ul>';}elseif((strpos('upperlowerdecim',mb_substr($node->getAttribute('type'),0,5,'utf-8'))!==false)){$this->out.='<ol style="list-style-type: '.htmlspecialchars($node->getAttribute('type'),2).'">';$this->at($node);$this->out.='</ol>';}else{$this->out.='<ul style="list-style-type: '.htmlspecialchars($node->getAttribute('type'),2).'">';$this->at($node);$this->out.='</ul>';}elseif($tb===15){$this->out.='<blockquote';if(!$node->hasAttribute('author'))$this->out.=' class="uncited"';$this->out.='><div>';if($node->hasAttribute('author')){$this->out.='<cite>';if($node->hasAttribute('url'))$this->out.='<a href="'.htmlspecialchars($node->getAttribute('url'),2).'" class="postlink">'.htmlspecialchars($node->getAttribute('author'),0).'</a>';elseif($node->hasAttribute('profile_url'))$this->out.='<a href="'.htmlspecialchars($node->getAttribute('profile_url'),2).'">'.htmlspecialchars($node->getAttribute('author'),0).'</a>';else$this->out.=htmlspecialchars($node->getAttribute('author'),0);$this->out.=' '.htmlspecialchars($this->params['L_WROTE'].$this->params['L_COLON'],0);if($node->hasAttribute('post_url'))$this->out.=' <a href="'.htmlspecialchars($node->getAttribute('post_url'),2).'" data-post-id="'.htmlspecialchars($node->getAttribute('post_id'),2).'" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a>';if($node->hasAttribute('date'))$this->out.='<div class="responsive-hide">'.htmlspecialchars($node->getAttribute('date'),0).'</div>';$this->out.='</cite>';}$this->at($node);$this->out.='</div></blockquote>';}elseif($tb===16)$this->out.='<br>';else{$this->out.='<span style="font-size: '.htmlspecialchars($node->getAttribute('size'),2).'%; line-height: normal">';$this->at($node);$this->out.='</span>';}elseif($tb<21)if($tb===18){$this->out.='<span style="text-decoration: underline">';$this->at($node);$this->out.='</span>';}elseif($tb===19){$this->out.='<a href="'.htmlspecialchars($node->getAttribute('url'),2).'" class="postlink">';$this->at($node);$this->out.='</a>';}else$this->out.='<iframe width="560" height="315" src="https://www.youtube.com/embed/'.htmlspecialchars($node->getAttribute('content1'),2).'" style="border: none;" allowfullscreen=""></iframe>';elseif($tb===21);else{$this->out.='<p>';$this->at($node);$this->out.='</p>';}
				}
	}
	private static $static=array('/CENTER'=>'</div>','/CODE'=>'</code></pre></div>','/COLOR'=>'</span>','/EMAIL'=>'</a>','/H3'=>'</h3>','/LI'=>'</li>','/QUOTE'=>'</div></blockquote>','/SIZE'=>'</span>','/U'=>'</span>','/URL'=>'</a>','CENTER'=>'<div style="text-align: center;">','H3'=>'<h3>','LI'=>'<li>','RL'=>'<br>','U'=>'<span style="text-decoration: underline">');
	private static $dynamic=array('COLOR'=>array('(^[^ ]+(?> (?!color=)[^=]+="[^"]*")*(?> color="([^"]*)")?.*)s','<span style="color: $1">'),'SIZE'=>array('(^[^ ]+(?> (?!size=)[^=]+="[^"]*")*(?> size="([^"]*)")?.*)s','<span style="font-size: $1%; line-height: normal">'),'URL'=>array('(^[^ ]+(?> (?!url=)[^=]+="[^"]*")*(?> url="([^"]*)")?.*)s','<a href="$1" class="postlink">'),'YOUTUBE'=>array('(^[^ ]+(?> (?!content1=)[^=]+="[^"]*")*(?> content1="([^"]*)")?.*)s','<iframe width="560" height="315" src="https://www.youtube.com/embed/$1" style="border: none;" allowfullscreen=""></iframe>'));
	private static $attributes;
	private static $quickBranches=array('/B'=>0,'/I'=>1,'/LIST'=>2,'ATTACHMENT'=>3,'B'=>4,'CODE'=>5,'E'=>6,'EMAIL'=>7,'EMOJI'=>8,'I'=>9,'LINK_TEXT'=>10,'LIST'=>11,'QUOTE'=>12);
	public $quickRenderingTest='(<(?=[FI])(?>FLASH|IMG)[ />])';

	protected function renderQuick($xml)
	{
		$xml = $this->decodeSMP($xml);
		self::$attributes = array();
		$html = preg_replace_callback(
			'(<(?:(?!/)((?:ATTACHMENT|E(?>MOJI)?|LINK_TEXT|RL|YOUTUBE))(?: [^>]*)?>.*?</\\1|(/?(?!br/|p>)[^ />]+)[^>]*?(/)?)>)s',
			array($this, 'quick'),
			preg_replace(
				'(<[eis]>[^<]*</[eis]>)',
				'',
				substr($xml, 1 + strpos($xml, '>'), -4)
			)
		);

		return str_replace('<br/>', '<br>', $html);
	}

	protected function quick($m)
	{
		if (isset($m[2]))
		{
			$id = $m[2];

			if (isset($m[3]))
			{
				unset($m[3]);

				$m[0] = substr($m[0], 0, -2) . '>';
				$html = $this->quick($m);

				$m[0] = '</' . $id . '>';
				$m[2] = '/' . $id;
				$html .= $this->quick($m);

				return $html;
			}
		}
		else
		{
			$id = $m[1];

			$lpos = 1 + strpos($m[0], '>');
			$rpos = strrpos($m[0], '<');
			$textContent = substr($m[0], $lpos, $rpos - $lpos);

			if (strpos($textContent, '<') !== false)
				throw new \RuntimeException;

			$textContent = htmlspecialchars_decode($textContent);
		}

		if (isset(self::$static[$id]))
			return self::$static[$id];

		if (isset(self::$dynamic[$id]))
		{
			list($match, $replace) = self::$dynamic[$id];
			return preg_replace($match, $replace, $m[0], 1);
		}

		if (!isset(self::$quickBranches[$id]))
		{
			if ($id[0] === '!' || $id[0] === '?' || preg_match('(^/?(?>FLASH|IMG)$)', $id))
				throw new \RuntimeException;
			return '';
		}

		$attributes = array();
		if (strpos($m[0], '="') !== false)
		{
			preg_match_all('(([^ =]++)="([^"]*))S', substr($m[0], 0, strpos($m[0], '>')), $matches);
			foreach ($matches[1] as $i => $attrName)
				$attributes[$attrName] = $matches[2][$i];
		}

		$qb = self::$quickBranches[$id];
		if($qb<7)if($qb<4)if($qb===0){$html='';if($this->params['STYLE_ID']==2||$this->params['STYLE_ID']==3||$this->params['STYLE_ID']==4||$this->params['STYLE_ID']==5||$this->params['STYLE_ID']==6||$this->params['STYLE_ID']==7||$this->params['STYLE_ID']==8)$html.='</strong>';else$html.='</span>';}elseif($qb===1){$html='';if($this->params['STYLE_ID']==2||$this->params['STYLE_ID']==3||$this->params['STYLE_ID']==4||$this->params['STYLE_ID']==5||$this->params['STYLE_ID']==6||$this->params['STYLE_ID']==7||$this->params['STYLE_ID']==8)$html.='</em>';else$html.='</span>';}elseif($qb===2){$attributes=array_pop(self::$attributes);$html='';if(!isset($attributes['type']))$html.='</ul>';elseif((strpos('upperlowerdecim',mb_substr(htmlspecialchars_decode($attributes['type']),0,5,'utf-8'))!==false))$html.='</ol>';else$html.='</ul>';}else{$attributes+=array('index'=>null,'filename'=>null);$html='<div class="inline-attachment"><!-- ia'.str_replace('&quot;','"',$attributes['index']).' -->'.str_replace('&quot;','"',$attributes['filename']).'<!-- ia'.str_replace('&quot;','"',$attributes['index']).' --></div>';}elseif($qb===4){$html='';if($this->params['STYLE_ID']==2||$this->params['STYLE_ID']==3||$this->params['STYLE_ID']==4||$this->params['STYLE_ID']==5||$this->params['STYLE_ID']==6||$this->params['STYLE_ID']==7||$this->params['STYLE_ID']==8)$html.='<strong class="text-strong">';else$html.='<span style="font-weight: bold">';}elseif($qb===5)$html='<div class="codebox"><p>'.htmlspecialchars($this->params['L_CODE'].$this->params['L_COLON'],0).' <a href="#" onclick="selectCode(this); return false;">'.htmlspecialchars($this->params['L_SELECT_ALL_CODE'],0).'</a></p><pre><code>';else{$html='';if(empty($this->params['S_VIEWSMILIES']))$html.=htmlspecialchars($textContent,0);elseif(isset(self::$btA66C2C3F[$textContent])){$n=self::$btA66C2C3F[$textContent];$html.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2);if($n<21)if($n<11)if($n<6)if($n<3)if($n===0)$html.='/icon_cool.gif" width="15" height="17" alt="8-)" title="Décontracté">';elseif($n===1)$html.='/icon_exclaim.gif" width="15" height="17" alt=":!:" title="Exclamation">';else$html.='/icon_e_sad.gif" width="15" height="17" alt=":(" title="Triste">';elseif($n===3)$html.='/icon_e_smile.gif" width="15" height="17" alt=":)" title="Souriant">';elseif($n===4)$html.='/icon_e_sad.gif" width="15" height="17" alt=":-(" title="Triste">';else$html.='/icon_e_smile.gif" width="15" height="17" alt=":-)" title="Souriant">';elseif($n<9)if($n===6)$html.='/icon_e_confused.gif" width="15" height="17" alt=":-?" title="Confus">';elseif($n===7)$html.='/icon_e_biggrin.gif" width="15" height="17" alt=":-D" title="Heureux">';else$html.='/icon_razz.gif" width="15" height="17" alt=":-P" title="Tirant la langue">';elseif($n===9)$html.='/icon_e_surprised.gif" width="15" height="17" alt=":-o" title="Étonné">';else$html.='/icon_mad.gif" width="15" height="17" alt=":-x" title="En colère">';elseif($n<16)if($n<14)if($n===11)$html.='/icon_neutral.gif" width="15" height="17" alt=":-|" title="Neutre">';elseif($n===12)$html.='/icon_e_confused.gif" width="15" height="17" alt=":?" title="Confus">';else$html.='/icon_question.gif" width="15" height="17" alt=":?:" title="Interrogation">';elseif($n===14)$html.='/icon_e_confused.gif" width="15" height="17" alt=":???:" title="Confus">';else$html.='/icon_e_biggrin.gif" width="15" height="17" alt=":D" title="Heureux">';elseif($n<19)if($n===16)$html.='/icon_razz.gif" width="15" height="17" alt=":P" title="Tirant la langue">';elseif($n===17)$html.='/icon_arrow.gif" width="15" height="17" alt=":arrow:" title="Flèche">';else$html.='/icon_cool.gif" width="15" height="17" alt=":cool:" title="Décontracté">';elseif($n===19)$html.='/icon_cry.gif" width="15" height="17" alt=":cry:" title="En pleurs">';else$html.='/icon_e_surprised.gif" width="15" height="17" alt=":eek:" title="Étonné">';elseif($n<32)if($n<27)if($n<24)if($n===21)$html.='/icon_evil.gif" width="15" height="17" alt=":evil:" title="Diable en colère">';elseif($n===22)$html.='/icon_e_geek.gif" width="17" height="17" alt=":geek:" title="Geek">';else$html.='/icon_e_biggrin.gif" width="15" height="17" alt=":grin:" title="Heureux">';elseif($n===24)$html.='/icon_idea.gif" width="15" height="17" alt=":idea:" title="Idée">';elseif($n===25)$html.='/icon_lol.gif" width="15" height="17" alt=":lol:" title="Riant">';else$html.='/icon_mad.gif" width="15" height="17" alt=":mad:" title="En colère">';elseif($n<30)if($n===27)$html.='/icon_mrgreen.gif" width="15" height="17" alt=":mrgreen:" title="M. Vert">';elseif($n===28)$html.='/icon_e_surprised.gif" width="15" height="17" alt=":o" title="Étonné">';else$html.='/icon_redface.gif" width="15" height="17" alt=":oops:" title="Embarrassé">';elseif($n===30)$html.='/icon_razz.gif" width="15" height="17" alt=":razz:" title="Tirant la langue">';else$html.='/icon_rolleyes.gif" width="15" height="17" alt=":roll:" title="Roulant des yeux">';elseif($n<37)if($n<35)if($n===32)$html.='/icon_e_sad.gif" width="15" height="17" alt=":sad:" title="Triste">';elseif($n===33)$html.='/icon_eek.gif" width="15" height="17" alt=":shock:" title="Scandalisé">';else$html.='/icon_e_smile.gif" width="15" height="17" alt=":smile:" title="Souriant">';elseif($n===35)$html.='/icon_twisted.gif" width="15" height="17" alt=":twisted:" title="Diable souriant">';else$html.='/icon_e_ugeek.gif" width="17" height="18" alt=":ugeek:" title="Super geek">';elseif($n<40)if($n===37)$html.='/icon_e_wink.gif" width="15" height="17" alt=":wink:" title="Clin d’œil">';elseif($n===38)$html.='/icon_mad.gif" width="15" height="17" alt=":x" title="En colère">';else$html.='/icon_neutral.gif" width="15" height="17" alt=":|" title="Neutre">';elseif($n===40)$html.='/icon_e_wink.gif" width="15" height="17" alt=";)" title="Clin d’œil">';else$html.='/icon_e_wink.gif" width="15" height="17" alt=";-)" title="Clin d’œil">';}else$html.=htmlspecialchars($textContent,0);}elseif($qb<10)if($qb===7){$attributes+=array('email'=>null,'body'=>null);$html='<a href="mailto:'.$attributes['email'];if(isset($attributes['subject'])||isset($attributes['body'])){$html.='?';if(isset($attributes['subject']))$html.='subject='.$attributes['subject'];if(isset($attributes['body'])){if(isset($attributes['subject']))$html.='&amp;';$html.='body='.$attributes['body'];}}$html.='">';}elseif($qb===8){$attributes+=array('seq'=>null);$html='';if(!empty($this->params['S_VIEWSMILIES']))$html.='<img alt="'.htmlspecialchars($textContent,2).'" class="emoji smilies" draggable="false" src="//cdn.jsdelivr.net/emojione/assets/svg/'.$attributes['seq'].'.svg">';else$html.=htmlspecialchars($textContent,0);}else{$html='';if($this->params['STYLE_ID']==2||$this->params['STYLE_ID']==3||$this->params['STYLE_ID']==4||$this->params['STYLE_ID']==5||$this->params['STYLE_ID']==6||$this->params['STYLE_ID']==7||$this->params['STYLE_ID']==8)$html.='<em class="text-italics">';else$html.='<span style="font-style: italic">';}elseif($qb===10){$attributes+=array('text'=>null);$html=str_replace('&quot;','"',$attributes['text']);}elseif($qb===11){$attributes+=array('type'=>null);$html='';if(!isset($attributes['type']))$html.='<ul>';elseif((strpos('upperlowerdecim',mb_substr(htmlspecialchars_decode($attributes['type']),0,5,'utf-8'))!==false))$html.='<ol style="list-style-type: '.$attributes['type'].'">';else$html.='<ul style="list-style-type: '.$attributes['type'].'">';self::$attributes[]=$attributes;}else{$attributes+=array('url'=>null,'author'=>null,'post_id'=>null);$html='<blockquote';if(!isset($attributes['author']))$html.=' class="uncited"';$html.='><div>';if(isset($attributes['author'])){$html.='<cite>';if(isset($attributes['url']))$html.='<a href="'.$attributes['url'].'" class="postlink">'.str_replace('&quot;','"',$attributes['author']).'</a>';elseif(isset($attributes['profile_url']))$html.='<a href="'.$attributes['profile_url'].'">'.str_replace('&quot;','"',$attributes['author']).'</a>';else$html.=str_replace('&quot;','"',$attributes['author']);$html.=' '.htmlspecialchars($this->params['L_WROTE'].$this->params['L_COLON'],0);if(isset($attributes['post_url']))$html.=' <a href="'.$attributes['post_url'].'" data-post-id="'.$attributes['post_id'].'" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a>';if(isset($attributes['date']))$html.='<div class="responsive-hide">'.str_replace('&quot;','"',$attributes['date']).'</div>';$html.='</cite>';}}

		return $html;
	}
}