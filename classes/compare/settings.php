<?php

namespace plagiarism_mcopyfind\compare;

//Probably can be made static
class settings{

    const WORDBUFFERLENGTH=5;
    //Settings
    public $phraseLength = 3;
    public $m_MismatchTolerance=2;
    public $m_Compares=0;
    public $m_PhraseLength = 6;
    public $m_FilterPhraseLength = 6;
    public $m_WordThreshold = 100;
    public $m_SkipLength = 20;
    public $m_MismatchPercentage = 80;
    public $m_bBriefReport = false;
    public $m_bIgnoreCase = false;
    public $m_bIgnoreNumbers = false;
    public $m_bIgnoreOuterPunctuation = false;
    public $m_bIgnorePunctuation = false;
    public $m_bSkipLongWords = false;
    public $m_bSkipNonwords = false;
    public $m_bBasic_Characters = false;
}