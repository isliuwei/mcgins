
var myApp = angular.module('myApp',['ngCookies','pascalprecht.translate']);



var translationsEN = {
  NAV:{
    'item1':'Index',
    'item2':'About Us',
    'item3':'Course',
    'item4':'Team',
    'item5':'Recruit',
    'item6':'FAQ',
    'item7':'Contact',
    'item8':'News',
  },
  Features:{

    'item1':{
      'title1':'Features 1',
      'content1':'Exclusively imported original editions of teaching materials which are highly recommended by the USA TESL professionals to meet Chinese English learners’ needs.'
    },
    'item2':{
      'title2':'Features 2',
      'content2':'The teaching department is supervised by Ms. Laura, who holds a Master degree in TESL, is a licensed K-12 ESL teacher of the USA, has taught in public schools in the USA, was the Director of an after-school institution in California, USA and was the Teaching Department Supervisor of a chain English learning institution in Shenzhen, China.'
    },
    'item3':{
      'title3':'Features 3',
      'content3':'Latest teaching resources and methods updated timely by TESL professionals from the USA.'
    },
    'item4':{
      'title4':'Features 4',
      'content4':'Teachers at McGins are all professionally screened, assessed and trained to meet the high TESL teaching standards at McGins.'
    },
    'item5':{
      'title5':'Features 5',
      'content5':'Ensure students to meet their own school English standards, and also have the ability to study abroad, prepare for top-tier schools and standardized language tests.'
    },
    'item6':{
      'title6':'Features 6',
      'content6':'Exclusive study tour and culture experience program to enjoy the authentic American life.'
    },
    'item7':{
      'title7':'Features 7',
      'content7':'Integrate “Heuristic Teaching Method” and “Exploratory Teaching Model” to cultivate students to become independent learners and critical thinkers.'
    },
    'item8':{
      'title8':'Features 8',
      'content8':'Use authoritative evaluation system to make the most appropriate English study-plan for each child.'
    }





// 'item1':'Exclusively imported original editions of teaching materials which are highly recommended by the USA TESL professionals to meet Chinese English learners’ needs.',
// 'item2':'The teaching department is supervised by Ms. Laura, who holds a Master degree in TESL, is a licensed K-12 ESL teacher of the USA, has taught in public schools in the USA, was the Director of an after-school institution in California, USA and was the Teaching Department Supervisor of a chain English learning institution in Shenzhen, China.',
// 'item3':'Latest teaching resources and methods updated timely by TESL professionals from the USA.',
// 'item4':'Teachers at McGins are all professionally screened, assessed and trained to meet the high TESL teaching standards at McGins.',
// 'item5':'Ensure students to meet their own school English standards, and also have the ability to study abroad, prepare for top-tier schools and standardized language tests.',
// 'item6':'Exclusive study tour and culture experience program to enjoy the authentic American life.',
// 'item7':'Integrate “Heuristic Teaching Method” and “Exploratory Teaching Model” to cultivate students to become independent learners and critical thinkers.',
// 'item8':'Use authoritative evaluation system to make the most appropriate English study-plan for each child.',
  },
  BUTTON_LANG_CHN: '中文',
  BUTTON_LANG_EN: 'ENGLISH',
  BG_COLOR: 'enStyle',
  JUSTIFY: 'justify',
  ABOUT_US: 'McGins English Education is an English learning program specially created for Chinese children by the USA TESL professionals and experienced English teachers. McGins aims at converting the authentic American ESL teaching philosophy and methods into practical approaches for Chinese children’s uniqueness and real needs. Our goal is to help Chinese children improve both overall English competence and test skills. These abilities will lead them to become the “3IN Talents” who can succeed in the future challenging world. The “3IN Talents” is proposed by educators in the USA, which refers to the people who are with Independent living skills, International vision and Intercultural mindset. '
}

var translationsCHN = {
  NAV:{
    'item1':'首页',
    'item2':'关于我们',
    'item3':'课程体系',
    'item4':'麦金思团队',
    'item5':'招聘信息',
    'item6':'常见问题',
    'item7':'联系我们',
    'item8':'最新动态',
  },
  Features:{
    'item1':{
      'title1':'特色一',
      'content1':'首家引进被美国英语教育学者公认，并获得普遍赞誉的“最适合中国儿童英语学习”的原版教材。'
    },
    'item2':{
      'title2':'特色二',
      'content2':'由美国TESL硕士、K-12 ESL美国教育部注册教师、曾任教于美国公立学校、并曾担任美国加州知名培训机构校区总监、中国深圳连锁英语培训机构教学总监的Ms.Laura，亲自督导教学、培训师资。',
    },
    'item3':{
      'title3':'特色三',
      'content3':'美国英语教育专家团队全程提供教学支持，实时更新来自美国最新的教学资源与方法。',
    },
    'item4':{
      'title4':'特色四',
      'content4':'教师团队是由经过严格选拔、考核、培训的专业青少儿英语教师组成，个人教学能力均达到麦金思教学标准。',
    },
    'item5':{
      'title5':'特色五',
      'conten5':'确保轻松应对在校英语考试，并无缝对接美国中小学课程，为考取名校、出国留学、出国考试打牢基础。',
    },
    'item6':{
      'title6':'特色六',
      'conten6':'独家特色美国游学、文化体验项目，零距离感受真正美国文化。',
    },
    'item7':{
      'title7':'特色七',
      'content7':'采用“启发式”和“探索式”教学法，培养学生独立学习和辩证思维的能力。',
    },
    'item8':{
      'title8':'特色八',
      'content8':'权威测评体系，为每个孩子量身定制专属英语学习规划。',
    }
    
    // 'item1':'首家引进被美国英语教育学者公认，并获得普遍赞誉的“最适合中国儿童英语学习”的原版教材。',
    // 'item2':'由美国TESL硕士、K-12 ESL美国教育部注册教师、曾任教于美国公立学校、并曾担任美国加州知名培训机构校区总监、中国深圳连锁英语培训机构教学总监的Ms.Laura，亲自督导教学、培训师资。',
    // 'item3':'美国英语教育专家团队全程提供教学支持，实时更新来自美国最新的教学资源与方法。',
    // 'item4':'教师团队是由经过严格选拔、考核、培训的专业青少儿英语教师组成，个人教学能力均达到麦金思教学标准。',
    // 'item5':'确保轻松应对在校英语考试，并无缝对接美国中小学课程，为考取名校、出国留学、出国考试打牢基础。',
    // 'item6':'独家特色美国游学、文化体验项目，零距离感受真正美国文化。',
    // 'item7':'采用“启发式”和“探索式”教学法，培养学生独立学习和辩证思维的能力。',
    // 'item8':'权威测评体系，为每个孩子量身定制专属英语学习规划。',
  },
  BUTTON_LANG_CHN: '中文',
  BUTTON_LANG_EN: 'ENGLISH',
  BG_COLOR: 'chnStyle',
  JUSTIFY: '',
  ABOUT_US: '麦金思青少儿英语（McGins English Education）是由在美国从事TESL教学与研究数年的国内外教育专家及一线英语教师团队，专为中国青少年儿童打造的英语学习项目，帮助中国孩子实现英语运用能力和应试水平双提升。麦金思旨在把美国的ESL教育理念和方式，转化为适应中国孩子英语学习特点和实际需求的教育模式。美国教育界有学者提出，“若要适应未来国际社会的不确定性挑战、成为世界公民，各国儿童应当从小被有意识地被培养成为‘3IN’人才”。麦金思通过英语引导青少年儿童建立世界观和人生格局，成为未来国际社会需要的独立、国际化、跨文化的“3IN”人才。'
  

}


myApp.config(['$translateProvider', function ($translateProvider) {
  // add translation table
  $translateProvider.translations('chn', translationsCHN);
  $translateProvider.translations('en', translationsEN);
  $translateProvider.preferredLanguage('chn');
  $translateProvider.fallbackLanguage('chn');
  $translateProvider.useSanitizeValueStrategy('escape');
  //存储语言设置
  $translateProvider.useLocalStorage();
  
  //$translateProvider.useCookieStorage();

}]);


myApp.controller('myCtrl', ['$translate', '$scope', '$sce',function ($translate, $scope,$sce) {
  $scope.changeLanguage = function (langKey) {
    $translate.use(langKey);
  };

}]);