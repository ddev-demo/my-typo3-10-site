<?php

class layout_Default_html_bfe913015ab4f9130c816eab81c7318e2f98666a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output127 = '';

$output127 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$output130 = '';

$output130 .= '

            <div id="c';
$array131 = array (
);
$output130 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array131)]);

$output130 .= '" class="frame frame-';
$array132 = array (
);
$output130 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.frame_class', $array132)]);

$output130 .= ' frame-type-';
$array133 = array (
);
$output130 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.CType', $array133)]);

$output130 .= ' frame-layout-';
$array134 = array (
);
$output130 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.layout', $array134)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments135 = array();
$arguments135['then'] = NULL;
$arguments135['else'] = NULL;
$arguments135['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array137 = array();
$array138 = array (
);$array137['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array138);

$expression139 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments135['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression139(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array137)
					),
					$renderingContext
				);
$output140 = '';

$output140 .= ' frame-space-before-';
$array141 = array (
);
$output140 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array141)]);
$arguments135['then'] = $output140;

$output130 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments142 = array();
$arguments142['then'] = NULL;
$arguments142['else'] = NULL;
$arguments142['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array144 = array();
$array145 = array (
);$array144['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array145);

$expression146 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments142['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression146(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array144)
					),
					$renderingContext
				);
$output147 = '';

$output147 .= ' frame-space-after-';
$array148 = array (
);
$output147 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array148)]);
$arguments142['then'] = $output147;

$output130 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output130 .= '">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
$output154 = '';

$output154 .= '
                    <a id="c';
$array155 = array (
);
$output154 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array155)]);

$output154 .= '"></a>
                ';
return $output154;
};
$arguments149 = array();
$arguments149['then'] = NULL;
$arguments149['else'] = NULL;
$arguments149['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array151 = array();
$array152 = array (
);$array151['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array152);

$expression153 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments149['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression153(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array151)
					),
					$renderingContext
				);
$arguments149['__thenClosure'] = $renderChildrenClosure150;

$output130 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output130 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$output160 = '';

$output160 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments161 = array();
$arguments161['section'] = NULL;
$arguments161['partial'] = NULL;
$arguments161['delegate'] = NULL;
$arguments161['renderable'] = NULL;
$arguments161['arguments'] = array (
);
$arguments161['optional'] = false;
$arguments161['default'] = NULL;
$arguments161['contentAs'] = NULL;
$arguments161['debug'] = true;
$arguments161['partial'] = 'DropIn/Before/All';
$arguments161['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output160 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output160 .= '
                ';
return $output160;
};
$arguments156 = array();
$arguments156['section'] = NULL;
$arguments156['partial'] = NULL;
$arguments156['delegate'] = NULL;
$arguments156['renderable'] = NULL;
$arguments156['arguments'] = array (
);
$arguments156['optional'] = false;
$arguments156['default'] = NULL;
$arguments156['contentAs'] = NULL;
$arguments156['debug'] = true;
$arguments156['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array158 = array();
$array158['0'] = 'true';

$expression159 = function($context) {return TRUE;};
$arguments156['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression159(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array158)
					),
					$renderingContext
				);

$output130 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output130 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
$output168 = '';

$output168 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments169 = array();
$arguments169['section'] = NULL;
$arguments169['partial'] = NULL;
$arguments169['delegate'] = NULL;
$arguments169['renderable'] = NULL;
$arguments169['arguments'] = array (
);
$arguments169['optional'] = false;
$arguments169['default'] = NULL;
$arguments169['contentAs'] = NULL;
$arguments169['debug'] = true;
$arguments169['partial'] = 'Header/All';
$arguments169['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output168 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output168 .= '
                ';
return $output168;
};
$arguments164 = array();
$arguments164['section'] = NULL;
$arguments164['partial'] = NULL;
$arguments164['delegate'] = NULL;
$arguments164['renderable'] = NULL;
$arguments164['arguments'] = array (
);
$arguments164['optional'] = false;
$arguments164['default'] = NULL;
$arguments164['contentAs'] = NULL;
$arguments164['debug'] = true;
$arguments164['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array166 = array();
$array166['0'] = 'true';

$expression167 = function($context) {return TRUE;};
$arguments164['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression167(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array166)
					),
					$renderingContext
				);

$output130 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output130 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments172 = array();
$arguments172['section'] = NULL;
$arguments172['partial'] = NULL;
$arguments172['delegate'] = NULL;
$arguments172['renderable'] = NULL;
$arguments172['arguments'] = array (
);
$arguments172['optional'] = false;
$arguments172['default'] = NULL;
$arguments172['contentAs'] = NULL;
$arguments172['debug'] = true;
$arguments172['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array174 = array();
$array174['0'] = 'true';

$expression175 = function($context) {return TRUE;};
$arguments172['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression175(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array174)
					),
					$renderingContext
				);

$output130 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output130 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$output180 = '';

$output180 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments181 = array();
$arguments181['section'] = NULL;
$arguments181['partial'] = NULL;
$arguments181['delegate'] = NULL;
$arguments181['renderable'] = NULL;
$arguments181['arguments'] = array (
);
$arguments181['optional'] = false;
$arguments181['default'] = NULL;
$arguments181['contentAs'] = NULL;
$arguments181['debug'] = true;
$arguments181['partial'] = 'Footer/All';
$arguments181['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output180 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext);

$output180 .= '
                ';
return $output180;
};
$arguments176 = array();
$arguments176['section'] = NULL;
$arguments176['partial'] = NULL;
$arguments176['delegate'] = NULL;
$arguments176['renderable'] = NULL;
$arguments176['arguments'] = array (
);
$arguments176['optional'] = false;
$arguments176['default'] = NULL;
$arguments176['contentAs'] = NULL;
$arguments176['debug'] = true;
$arguments176['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array178 = array();
$array178['0'] = 'true';

$expression179 = function($context) {return TRUE;};
$arguments176['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression179(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array178)
					),
					$renderingContext
				);

$output130 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output130 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
$output188 = '';

$output188 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments189 = array();
$arguments189['section'] = NULL;
$arguments189['partial'] = NULL;
$arguments189['delegate'] = NULL;
$arguments189['renderable'] = NULL;
$arguments189['arguments'] = array (
);
$arguments189['optional'] = false;
$arguments189['default'] = NULL;
$arguments189['contentAs'] = NULL;
$arguments189['debug'] = true;
$arguments189['partial'] = 'DropIn/After/All';
$arguments189['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output188 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output188 .= '
                ';
return $output188;
};
$arguments184 = array();
$arguments184['section'] = NULL;
$arguments184['partial'] = NULL;
$arguments184['delegate'] = NULL;
$arguments184['renderable'] = NULL;
$arguments184['arguments'] = array (
);
$arguments184['optional'] = false;
$arguments184['default'] = NULL;
$arguments184['contentAs'] = NULL;
$arguments184['debug'] = true;
$arguments184['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array186 = array();
$array186['0'] = 'true';

$expression187 = function($context) {return TRUE;};
$arguments184['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression187(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array186)
					),
					$renderingContext
				);

$output130 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);

$output130 .= '
            </div>

        ';
return $output130;
};
$arguments128 = array();

$output127 .= '';

$output127 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
$output194 = '';

$output194 .= '

            <a id="c';
$array195 = array (
);
$output194 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array195)]);

$output194 .= '"></a>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
$output201 = '';

$output201 .= '
                <a id="c';
$array202 = array (
);
$output201 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array202)]);

$output201 .= '"></a>
            ';
return $output201;
};
$arguments196 = array();
$arguments196['then'] = NULL;
$arguments196['else'] = NULL;
$arguments196['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array198 = array();
$array199 = array (
);$array198['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array199);

$expression200 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments196['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression200(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array198)
					),
					$renderingContext
				);
$arguments196['__thenClosure'] = $renderChildrenClosure197;

$output194 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext);

$output194 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
$output208 = '';

$output208 .= '
                <div class="frame-space-before-';
$array209 = array (
);
$output208 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array209)]);

$output208 .= '"></div>
            ';
return $output208;
};
$arguments203 = array();
$arguments203['then'] = NULL;
$arguments203['else'] = NULL;
$arguments203['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array205 = array();
$array206 = array (
);$array205['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array206);

$expression207 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments203['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression207(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array205)
					),
					$renderingContext
				);
$arguments203['__thenClosure'] = $renderChildrenClosure204;

$output194 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);

$output194 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
$output214 = '';

$output214 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments215 = array();
$arguments215['section'] = NULL;
$arguments215['partial'] = NULL;
$arguments215['delegate'] = NULL;
$arguments215['renderable'] = NULL;
$arguments215['arguments'] = array (
);
$arguments215['optional'] = false;
$arguments215['default'] = NULL;
$arguments215['contentAs'] = NULL;
$arguments215['debug'] = true;
$arguments215['partial'] = 'DropIn/Before/All';
$arguments215['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output214 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);

$output214 .= '
            ';
return $output214;
};
$arguments210 = array();
$arguments210['section'] = NULL;
$arguments210['partial'] = NULL;
$arguments210['delegate'] = NULL;
$arguments210['renderable'] = NULL;
$arguments210['arguments'] = array (
);
$arguments210['optional'] = false;
$arguments210['default'] = NULL;
$arguments210['contentAs'] = NULL;
$arguments210['debug'] = true;
$arguments210['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array212 = array();
$array212['0'] = 'true';

$expression213 = function($context) {return TRUE;};
$arguments210['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression213(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array212)
					),
					$renderingContext
				);

$output194 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);

$output194 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
$output222 = '';

$output222 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments223 = array();
$arguments223['section'] = NULL;
$arguments223['partial'] = NULL;
$arguments223['delegate'] = NULL;
$arguments223['renderable'] = NULL;
$arguments223['arguments'] = array (
);
$arguments223['optional'] = false;
$arguments223['default'] = NULL;
$arguments223['contentAs'] = NULL;
$arguments223['debug'] = true;
$arguments223['partial'] = 'Header/All';
$arguments223['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output222 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext);

$output222 .= '
            ';
return $output222;
};
$arguments218 = array();
$arguments218['section'] = NULL;
$arguments218['partial'] = NULL;
$arguments218['delegate'] = NULL;
$arguments218['renderable'] = NULL;
$arguments218['arguments'] = array (
);
$arguments218['optional'] = false;
$arguments218['default'] = NULL;
$arguments218['contentAs'] = NULL;
$arguments218['debug'] = true;
$arguments218['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array220 = array();
$array220['0'] = 'true';

$expression221 = function($context) {return TRUE;};
$arguments218['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression221(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array220)
					),
					$renderingContext
				);

$output194 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext);

$output194 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments226 = array();
$arguments226['section'] = NULL;
$arguments226['partial'] = NULL;
$arguments226['delegate'] = NULL;
$arguments226['renderable'] = NULL;
$arguments226['arguments'] = array (
);
$arguments226['optional'] = false;
$arguments226['default'] = NULL;
$arguments226['contentAs'] = NULL;
$arguments226['debug'] = true;
$arguments226['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array228 = array();
$array228['0'] = 'true';

$expression229 = function($context) {return TRUE;};
$arguments226['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression229(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array228)
					),
					$renderingContext
				);

$output194 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);

$output194 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
$output234 = '';

$output234 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments235 = array();
$arguments235['section'] = NULL;
$arguments235['partial'] = NULL;
$arguments235['delegate'] = NULL;
$arguments235['renderable'] = NULL;
$arguments235['arguments'] = array (
);
$arguments235['optional'] = false;
$arguments235['default'] = NULL;
$arguments235['contentAs'] = NULL;
$arguments235['debug'] = true;
$arguments235['partial'] = 'Footer/All';
$arguments235['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output234 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);

$output234 .= '
            ';
return $output234;
};
$arguments230 = array();
$arguments230['section'] = NULL;
$arguments230['partial'] = NULL;
$arguments230['delegate'] = NULL;
$arguments230['renderable'] = NULL;
$arguments230['arguments'] = array (
);
$arguments230['optional'] = false;
$arguments230['default'] = NULL;
$arguments230['contentAs'] = NULL;
$arguments230['debug'] = true;
$arguments230['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array232 = array();
$array232['0'] = 'true';

$expression233 = function($context) {return TRUE;};
$arguments230['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression233(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array232)
					),
					$renderingContext
				);

$output194 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext);

$output194 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
$output242 = '';

$output242 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments243 = array();
$arguments243['section'] = NULL;
$arguments243['partial'] = NULL;
$arguments243['delegate'] = NULL;
$arguments243['renderable'] = NULL;
$arguments243['arguments'] = array (
);
$arguments243['optional'] = false;
$arguments243['default'] = NULL;
$arguments243['contentAs'] = NULL;
$arguments243['debug'] = true;
$arguments243['partial'] = 'DropIn/After/All';
$arguments243['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output242 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext);

$output242 .= '
            ';
return $output242;
};
$arguments238 = array();
$arguments238['section'] = NULL;
$arguments238['partial'] = NULL;
$arguments238['delegate'] = NULL;
$arguments238['renderable'] = NULL;
$arguments238['arguments'] = array (
);
$arguments238['optional'] = false;
$arguments238['default'] = NULL;
$arguments238['contentAs'] = NULL;
$arguments238['debug'] = true;
$arguments238['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array240 = array();
$array240['0'] = 'true';

$expression241 = function($context) {return TRUE;};
$arguments238['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression241(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array240)
					),
					$renderingContext
				);

$output194 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments238, $renderChildrenClosure239, $renderingContext);

$output194 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure247 = function() use ($renderingContext, $self) {
$output251 = '';

$output251 .= '
                <div class="frame-space-after-';
$array252 = array (
);
$output251 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array252)]);

$output251 .= '"></div>
            ';
return $output251;
};
$arguments246 = array();
$arguments246['then'] = NULL;
$arguments246['else'] = NULL;
$arguments246['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array248 = array();
$array249 = array (
);$array248['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array249);

$expression250 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments246['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression250(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array248)
					),
					$renderingContext
				);
$arguments246['__thenClosure'] = $renderChildrenClosure247;

$output194 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments246, $renderChildrenClosure247, $renderingContext);

$output194 .= '

        ';
return $output194;
};
$arguments192 = array();
$arguments192['if'] = NULL;

$output127 .= '';

$output127 .= '
    ';
return $output127;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array124 = array();
$array125 = array (
);$array124['0'] = $renderingContext->getVariableProvider()->getByPath('data.frame_class', $array125);
$array124['1'] = ' != none';

$expression126 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != "none");};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression126(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array124)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '

            <div id="c';
$array4 = array (
);
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array4)]);

$output3 .= '" class="frame frame-';
$array5 = array (
);
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.frame_class', $array5)]);

$output3 .= ' frame-type-';
$array6 = array (
);
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.CType', $array6)]);

$output3 .= ' frame-layout-';
$array7 = array (
);
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.layout', $array7)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$arguments8['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array10 = array();
$array11 = array (
);$array10['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array11);

$expression12 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments8['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression12(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array10)
					),
					$renderingContext
				);
$output13 = '';

$output13 .= ' frame-space-before-';
$array14 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array14)]);
$arguments8['then'] = $output13;

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['then'] = NULL;
$arguments15['else'] = NULL;
$arguments15['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array17 = array();
$array18 = array (
);$array17['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array18);

$expression19 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments15['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression19(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array17)
					),
					$renderingContext
				);
$output20 = '';

$output20 .= ' frame-space-after-';
$array21 = array (
);
$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array21)]);
$arguments15['then'] = $output20;

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output3 .= '">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
                    <a id="c';
$array28 = array (
);
$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array28)]);

$output27 .= '"></a>
                ';
return $output27;
};
$arguments22 = array();
$arguments22['then'] = NULL;
$arguments22['else'] = NULL;
$arguments22['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array24 = array();
$array25 = array (
);$array24['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array25);

$expression26 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments22['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression26(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)
					),
					$renderingContext
				);
$arguments22['__thenClosure'] = $renderChildrenClosure23;

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output3 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['section'] = NULL;
$arguments34['partial'] = NULL;
$arguments34['delegate'] = NULL;
$arguments34['renderable'] = NULL;
$arguments34['arguments'] = array (
);
$arguments34['optional'] = false;
$arguments34['default'] = NULL;
$arguments34['contentAs'] = NULL;
$arguments34['debug'] = true;
$arguments34['partial'] = 'DropIn/Before/All';
$arguments34['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output33 .= '
                ';
return $output33;
};
$arguments29 = array();
$arguments29['section'] = NULL;
$arguments29['partial'] = NULL;
$arguments29['delegate'] = NULL;
$arguments29['renderable'] = NULL;
$arguments29['arguments'] = array (
);
$arguments29['optional'] = false;
$arguments29['default'] = NULL;
$arguments29['contentAs'] = NULL;
$arguments29['debug'] = true;
$arguments29['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array31 = array();
$array31['0'] = 'true';

$expression32 = function($context) {return TRUE;};
$arguments29['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression32(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array31)
					),
					$renderingContext
				);

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output3 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['section'] = NULL;
$arguments42['partial'] = NULL;
$arguments42['delegate'] = NULL;
$arguments42['renderable'] = NULL;
$arguments42['arguments'] = array (
);
$arguments42['optional'] = false;
$arguments42['default'] = NULL;
$arguments42['contentAs'] = NULL;
$arguments42['debug'] = true;
$arguments42['partial'] = 'Header/All';
$arguments42['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output41 .= '
                ';
return $output41;
};
$arguments37 = array();
$arguments37['section'] = NULL;
$arguments37['partial'] = NULL;
$arguments37['delegate'] = NULL;
$arguments37['renderable'] = NULL;
$arguments37['arguments'] = array (
);
$arguments37['optional'] = false;
$arguments37['default'] = NULL;
$arguments37['contentAs'] = NULL;
$arguments37['debug'] = true;
$arguments37['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array39 = array();
$array39['0'] = 'true';

$expression40 = function($context) {return TRUE;};
$arguments37['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression40(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array39)
					),
					$renderingContext
				);

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output3 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['section'] = NULL;
$arguments45['partial'] = NULL;
$arguments45['delegate'] = NULL;
$arguments45['renderable'] = NULL;
$arguments45['arguments'] = array (
);
$arguments45['optional'] = false;
$arguments45['default'] = NULL;
$arguments45['contentAs'] = NULL;
$arguments45['debug'] = true;
$arguments45['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array47 = array();
$array47['0'] = 'true';

$expression48 = function($context) {return TRUE;};
$arguments45['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression48(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array47)
					),
					$renderingContext
				);

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output3 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['section'] = NULL;
$arguments54['partial'] = NULL;
$arguments54['delegate'] = NULL;
$arguments54['renderable'] = NULL;
$arguments54['arguments'] = array (
);
$arguments54['optional'] = false;
$arguments54['default'] = NULL;
$arguments54['contentAs'] = NULL;
$arguments54['debug'] = true;
$arguments54['partial'] = 'Footer/All';
$arguments54['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output53 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output53 .= '
                ';
return $output53;
};
$arguments49 = array();
$arguments49['section'] = NULL;
$arguments49['partial'] = NULL;
$arguments49['delegate'] = NULL;
$arguments49['renderable'] = NULL;
$arguments49['arguments'] = array (
);
$arguments49['optional'] = false;
$arguments49['default'] = NULL;
$arguments49['contentAs'] = NULL;
$arguments49['debug'] = true;
$arguments49['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array51 = array();
$array51['0'] = 'true';

$expression52 = function($context) {return TRUE;};
$arguments49['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression52(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array51)
					),
					$renderingContext
				);

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output3 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['section'] = NULL;
$arguments62['partial'] = NULL;
$arguments62['delegate'] = NULL;
$arguments62['renderable'] = NULL;
$arguments62['arguments'] = array (
);
$arguments62['optional'] = false;
$arguments62['default'] = NULL;
$arguments62['contentAs'] = NULL;
$arguments62['debug'] = true;
$arguments62['partial'] = 'DropIn/After/All';
$arguments62['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output61 .= '
                ';
return $output61;
};
$arguments57 = array();
$arguments57['section'] = NULL;
$arguments57['partial'] = NULL;
$arguments57['delegate'] = NULL;
$arguments57['renderable'] = NULL;
$arguments57['arguments'] = array (
);
$arguments57['optional'] = false;
$arguments57['default'] = NULL;
$arguments57['contentAs'] = NULL;
$arguments57['debug'] = true;
$arguments57['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array59 = array();
$array59['0'] = 'true';

$expression60 = function($context) {return TRUE;};
$arguments57['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression60(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array59)
					),
					$renderingContext
				);

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output3 .= '
            </div>

        ';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '

            <a id="c';
$array66 = array (
);
$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array66)]);

$output65 .= '"></a>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
                <a id="c';
$array73 = array (
);
$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array73)]);

$output72 .= '"></a>
            ';
return $output72;
};
$arguments67 = array();
$arguments67['then'] = NULL;
$arguments67['else'] = NULL;
$arguments67['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array69 = array();
$array70 = array (
);$array69['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array70);

$expression71 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments67['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression71(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array69)
					),
					$renderingContext
				);
$arguments67['__thenClosure'] = $renderChildrenClosure68;

$output65 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output65 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '
                <div class="frame-space-before-';
$array80 = array (
);
$output79 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array80)]);

$output79 .= '"></div>
            ';
return $output79;
};
$arguments74 = array();
$arguments74['then'] = NULL;
$arguments74['else'] = NULL;
$arguments74['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array76 = array();
$array77 = array (
);$array76['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array77);

$expression78 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments74['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression78(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array76)
					),
					$renderingContext
				);
$arguments74['__thenClosure'] = $renderChildrenClosure75;

$output65 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output65 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments86 = array();
$arguments86['section'] = NULL;
$arguments86['partial'] = NULL;
$arguments86['delegate'] = NULL;
$arguments86['renderable'] = NULL;
$arguments86['arguments'] = array (
);
$arguments86['optional'] = false;
$arguments86['default'] = NULL;
$arguments86['contentAs'] = NULL;
$arguments86['debug'] = true;
$arguments86['partial'] = 'DropIn/Before/All';
$arguments86['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output85 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output85 .= '
            ';
return $output85;
};
$arguments81 = array();
$arguments81['section'] = NULL;
$arguments81['partial'] = NULL;
$arguments81['delegate'] = NULL;
$arguments81['renderable'] = NULL;
$arguments81['arguments'] = array (
);
$arguments81['optional'] = false;
$arguments81['default'] = NULL;
$arguments81['contentAs'] = NULL;
$arguments81['debug'] = true;
$arguments81['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array83 = array();
$array83['0'] = 'true';

$expression84 = function($context) {return TRUE;};
$arguments81['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression84(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array83)
					),
					$renderingContext
				);

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output65 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments94 = array();
$arguments94['section'] = NULL;
$arguments94['partial'] = NULL;
$arguments94['delegate'] = NULL;
$arguments94['renderable'] = NULL;
$arguments94['arguments'] = array (
);
$arguments94['optional'] = false;
$arguments94['default'] = NULL;
$arguments94['contentAs'] = NULL;
$arguments94['debug'] = true;
$arguments94['partial'] = 'Header/All';
$arguments94['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output93 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output93 .= '
            ';
return $output93;
};
$arguments89 = array();
$arguments89['section'] = NULL;
$arguments89['partial'] = NULL;
$arguments89['delegate'] = NULL;
$arguments89['renderable'] = NULL;
$arguments89['arguments'] = array (
);
$arguments89['optional'] = false;
$arguments89['default'] = NULL;
$arguments89['contentAs'] = NULL;
$arguments89['debug'] = true;
$arguments89['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array91 = array();
$array91['0'] = 'true';

$expression92 = function($context) {return TRUE;};
$arguments89['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression92(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array91)
					),
					$renderingContext
				);

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output65 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['section'] = NULL;
$arguments97['partial'] = NULL;
$arguments97['delegate'] = NULL;
$arguments97['renderable'] = NULL;
$arguments97['arguments'] = array (
);
$arguments97['optional'] = false;
$arguments97['default'] = NULL;
$arguments97['contentAs'] = NULL;
$arguments97['debug'] = true;
$arguments97['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array99 = array();
$array99['0'] = 'true';

$expression100 = function($context) {return TRUE;};
$arguments97['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression100(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array99)
					),
					$renderingContext
				);

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output65 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments106 = array();
$arguments106['section'] = NULL;
$arguments106['partial'] = NULL;
$arguments106['delegate'] = NULL;
$arguments106['renderable'] = NULL;
$arguments106['arguments'] = array (
);
$arguments106['optional'] = false;
$arguments106['default'] = NULL;
$arguments106['contentAs'] = NULL;
$arguments106['debug'] = true;
$arguments106['partial'] = 'Footer/All';
$arguments106['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output105 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output105 .= '
            ';
return $output105;
};
$arguments101 = array();
$arguments101['section'] = NULL;
$arguments101['partial'] = NULL;
$arguments101['delegate'] = NULL;
$arguments101['renderable'] = NULL;
$arguments101['arguments'] = array (
);
$arguments101['optional'] = false;
$arguments101['default'] = NULL;
$arguments101['contentAs'] = NULL;
$arguments101['debug'] = true;
$arguments101['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array103 = array();
$array103['0'] = 'true';

$expression104 = function($context) {return TRUE;};
$arguments101['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression104(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array103)
					),
					$renderingContext
				);

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output65 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$output113 = '';

$output113 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments114 = array();
$arguments114['section'] = NULL;
$arguments114['partial'] = NULL;
$arguments114['delegate'] = NULL;
$arguments114['renderable'] = NULL;
$arguments114['arguments'] = array (
);
$arguments114['optional'] = false;
$arguments114['default'] = NULL;
$arguments114['contentAs'] = NULL;
$arguments114['debug'] = true;
$arguments114['partial'] = 'DropIn/After/All';
$arguments114['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output113 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output113 .= '
            ';
return $output113;
};
$arguments109 = array();
$arguments109['section'] = NULL;
$arguments109['partial'] = NULL;
$arguments109['delegate'] = NULL;
$arguments109['renderable'] = NULL;
$arguments109['arguments'] = array (
);
$arguments109['optional'] = false;
$arguments109['default'] = NULL;
$arguments109['contentAs'] = NULL;
$arguments109['debug'] = true;
$arguments109['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array111 = array();
$array111['0'] = 'true';

$expression112 = function($context) {return TRUE;};
$arguments109['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression112(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array111)
					),
					$renderingContext
				);

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output65 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$output122 = '';

$output122 .= '
                <div class="frame-space-after-';
$array123 = array (
);
$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array123)]);

$output122 .= '"></div>
            ';
return $output122;
};
$arguments117 = array();
$arguments117['then'] = NULL;
$arguments117['else'] = NULL;
$arguments117['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array119 = array();
$array120 = array (
);$array119['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array120);

$expression121 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments117['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression121(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array119)
					),
					$renderingContext
				);
$arguments117['__thenClosure'] = $renderChildrenClosure118;

$output65 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output65 .= '

        ';
return $output65;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#