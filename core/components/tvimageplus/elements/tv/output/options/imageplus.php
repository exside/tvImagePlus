<?php 

$root = $modx->getOption('core_path').'components/tvimageplus/';
if(!class_exists('tvImagePlus')){ require $root.'tvImagePlus.class.php'; };
$helper = new tvImagePlus($modx);

$modx->lexicon->load('tvimageplus:default');
$a = print_r($this->getProperties(),1);

$modx->controller->setPlaceholder('t_width',$a);
$modx->controller->setPlaceholder('tvimagepluslexicon',json_encode($helper->config['lexicon']));
$modx->controller->setPlaceholder('tvimageplus',$helper);
$modx->controller->addLexiconTopic('tvimageplus:default');


return $modx->smarty->fetch($root.'elements/tv/output/tpl/imageplus.options.tpl');
