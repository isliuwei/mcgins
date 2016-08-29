/*
Navicat MySQL Data Transfer

Source Server         : liuwei
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : mcgins

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-08-27 22:06:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `t_course`
-- ----------------------------
DROP TABLE IF EXISTS `t_course`;
CREATE TABLE `t_course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `levels` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `courses` varchar(255) DEFAULT NULL,
  `intro` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_course
-- ----------------------------
INSERT INTO `t_course` VALUES ('1', 'Enlightening', '4-6岁（幼儿园 Kindergarten）', '听说读写+拼读+绘本(EMC + Phonics+Little books)', '听说读写启蒙：主题式课程单元，帮助儿童认识自己及周围环境，掌握日常生活词汇、生活用语、重点句型、简单日常对话、课堂用语。\r\n\r\n拼读启蒙：掌握基本拼读规律，能朗读简单短文、绘本。养成自信，培养语感，激发兴趣，享受双语的乐趣，幼小衔接。');
INSERT INTO `t_course` VALUES ('2', 'Activating', '7-9岁（一至三年级Grade 1-3）', '听说读写+拼读+语法+阅读(AMC + Phonics + Grammar + Primary Reading)', '听说读写进阶：进入小学初级英语学习阶段，多元化课程设计，通过英语认识世界、认识自我，形成内在学习动机，积累重点词汇、句型，听说读写并进。\r\n\r\n小学语法入门：零枯燥学语法，语法知识自然掌握，形成语感，掌握规律，为阅读、写作打牢基础。\r\n\r\n拼读+阅读：掌握发音规律，见词能读，听音能写，由读词向读文章进阶。');
INSERT INTO `t_course` VALUES ('3', 'Growing', '10-12岁（三至五年级 Grade 3-5）', '听说读写+拼读+语法+精读 (GMC + Phonics + Grammar + Top Reading)', '说读写飞跃：进入小学中高级英语学习阶段，运用与应试并驾齐驱，了解西方文化，培养自主学习能力，养成良好的学习习惯和思考能力，保持内在学习动机。巩固加强已有英语知识。本阶段词汇量设定高于国家规定的小学毕业生的英语课标。\r\n\r\n小学语法强化：配套语法教程，完成本阶段后，语法能力相当于初一水平。\r\n\r\n拼读+精读：拼读辅助背单词， 由朗读文章向阅读理解飞跃，训练边读边理解的能力，全面提高阅读水平，为小升初做好准备。');
INSERT INTO `t_course` VALUES ('4', 'Rising', '13-15岁（初中 Middle School）', '听说读写+语法+体裁精读+写作 (RMC + Grammar + Genre Reading + Writing)', '中听说读写：在轻松应对学校英语考试的同时，挑战同年龄美国孩子学习内容及学习模式，使综合英语能力超越同龄人，为中考及雅思、托福等出国考试打下坚实基础。\r\n\r\n初中语法强化：通过大量的“隐性”练习，让学生不知不觉中记住用法、掌握规律、活学活用，全面辅助提升听说读写综合能力。\r\n\r\n体裁精读+写作：英美文学赏析，不同体裁阅读，调研、报告、演讲能力训练，培养英语的实力。');

-- ----------------------------
-- Table structure for `t_index`
-- ----------------------------
DROP TABLE IF EXISTS `t_index`;
CREATE TABLE `t_index` (
  `index_id` int(11) NOT NULL AUTO_INCREMENT,
  `index_ch` varchar(255) DEFAULT NULL,
  `index_feature` varchar(255) DEFAULT NULL,
  `index_carousel` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`index_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_index
-- ----------------------------
INSERT INTO `t_index` VALUES ('1', '特色一', '首家引进被美国英语教育界公认，并获得普遍赞誉的“最适合中国儿童英语学习”的原版教材。', 'img/banner1.jpg');
INSERT INTO `t_index` VALUES ('2', '特色二', '由美国TESL硕士、K-12 ESL\r美国教育部注册教师、曾任教\r于美国公立学校、并曾担任美\r国加州知名培训机构校区总监\r的Ms.Laura，亲自督导教学、\r培训师资。', 'img/banner2.jpg');
INSERT INTO `t_index` VALUES ('3', '特色三', '美国英语教育专家团队全程提供教学支持，实时更新来自美国最新的教学资源与方法。', 'img/banner3.jpg');
INSERT INTO `t_index` VALUES ('4', '特色四', '教师团队均经过严格选拔、考核、培训，拥有TESL青少儿英语教师资格，个人教学能力均达到麦金思教学标准。', 'img/banner4.jpg');
INSERT INTO `t_index` VALUES ('5', '特色五', '确保轻松应对在校英语\r考试，并无缝对接美国中小\r学课程，为考取名校、出国\r留学、出国考试打牢基础 。', null);
INSERT INTO `t_index` VALUES ('6', '特色六', ' 独家特色美国游学、文化\r体验项目，零距离感受真正美\r国文化。', null);
INSERT INTO `t_index` VALUES ('7', '特色七', '采用美国青少儿教育大纲\r提出的“启发式”“探索式”\r教学法，培养学生独立学习和\r辩证思维的能力。', null);
INSERT INTO `t_index` VALUES ('8', '特色八', '权威测评体系，为每个孩\r子量身定制专属英语学习规划。', null);

-- ----------------------------
-- Table structure for `t_job`
-- ----------------------------
DROP TABLE IF EXISTS `t_job`;
CREATE TABLE `t_job` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_welfare` varchar(255) DEFAULT NULL,
  `job_teacher_recruit` varchar(255) DEFAULT NULL,
  `job_teacher_qualifications` varchar(255) DEFAULT NULL,
  `job_advisor_study` varchar(255) DEFAULT NULL,
  `job_advisor_qualifications` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_job
-- ----------------------------
INSERT INTO `t_job` VALUES ('1', '1.国际化的工作环境：愉快，互助，分享，专业，公平，合作，平等，重视能力', '1.全英文教授麦金思课程体系，授课对象为4-15岁青少儿；', '1.热爱英语教学，了解儿童身心发展；', '1.日常教务教学管理', '1.大专以上学历，英语、教育、心理学专业，有与4-15岁青少年儿童工作经验者优先；');
INSERT INTO `t_job` VALUES ('2', '2.专业的培训机制', '2.依照麦金思标准化流程按时做好备课及教学研讨等，确保教学质量；', '2.英语口语表达流畅，语感良好，发音标准；', '2.为来电及上门咨询者详细解答问题、积极开展课程推荐、体验课程预约和报名签约', '2.有亲和力，真诚，勤奋，负责，有爱心，踏实稳重，执行力强，善于思考总结，服务意识强，抗压能力强，沟通表达能力良好；');
INSERT INTO `t_job` VALUES ('3', '3.体验真正美国文化，有机会与美国团队合作，出访美国', '3.参与培训、教研和会议等活动；', '3.具备责任心、爱心、耐心、亲和力；', '3.参与培训、教研和会议等活动；', '3.有教育或其他行业销售经验者优先；');
INSERT INTO `t_job` VALUES ('4', '4.有竞争力的薪资，包括底薪、提成等', '4.电话回访，日常沟通，同步辅导，作业批改等；', '4.本科以上英语、师范或教育专业，至少2年以上全职少儿英语教学经验，英语水平相当于专业4级或以上优先考虑；', '4.对学生的英语学习进展给予专业反馈和建议；', '4.熟练运用办公软件');
INSERT INTO `t_job` VALUES ('5', '5.五险，6天8小时工作制', '5.对学生的学习效果进行有效反馈，及时做出教学调整方案；', '5.有团队协作精神，良好的沟通表达能力，有服务意识，进取心，很强的组织协调能力；', '5.负责与老师、学生、家长、主管的全面有效沟通，确保信息统一和客户满意度', null);
INSERT INTO `t_job` VALUES ('6', '6.公平、透明的职业晋升平台，表现优秀的学习顾问，可提前竞聘或调整为主管岗位', '6.组织试听课、公开课，协助关单、续费等招生活动，与学习顾问协力为学员量身定制学习规划；', '6.可以适应弹性工作时间安排，如周末工作；', '6.协同团队完成每月的销售指标；', null);
INSERT INTO `t_job` VALUES ('7', '7.丰富多样的团队活动', '7.领导交付的其他任务。', '7.有学习钻研与创新意识，积极学习探索国际英语教学及儿童心理学前沿理论知识，并将其运用到工作中；', '7.组织参与市场推广等招生活动', null);
INSERT INTO `t_job` VALUES ('8', null, null, '8.教学水平及课控能力突出，英语教育专业知识丰富，乐于分享', '8.完成上级交付的其它工作任务安排', null);

-- ----------------------------
-- Table structure for `t_teacher`
-- ----------------------------
DROP TABLE IF EXISTS `t_teacher`;
CREATE TABLE `t_teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_require` varchar(255) DEFAULT NULL,
  `teacher_qualifications` varchar(255) DEFAULT NULL,
  `advisor_require` varchar(255) DEFAULT NULL,
  `advisor_qualifications` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_teacher
-- ----------------------------
INSERT INTO `t_teacher` VALUES ('1', '1.全英文教授麦金思课程体系，授课对象为4-15岁青少儿；', '1.热爱英语教学，了解儿童身心发展；', '1.日常教务教学管理', '1.大专以上学历，英语、教育、心理学专业，有与4-15岁青少年儿童工作经验者优先；');
INSERT INTO `t_teacher` VALUES ('2', '2.依照麦金思标准化流程按时做好备课及教学研讨等，确保教学质量；', '2.英语口语表达流畅，语感良好，发音标准；', '2.为来电及上门咨询者详细解答问题、积极开展课程推荐、体验课程预约和报名签约', '2.有亲和力，真诚，勤奋，负责，有爱心，踏实稳重，执行力强，善于思考总结，服务意识强，抗压能力强，沟通表达能力良好；');
INSERT INTO `t_teacher` VALUES ('3', '3.参与培训、教研和会议等活动；', '3.具备责任心、爱心、耐心、亲和力；', '3.参与培训、教研和会议等活动；', '3.有教育或其他行业销售经验者优先；');
INSERT INTO `t_teacher` VALUES ('4', '4.电话回访，日常沟通，同步辅导，作业批改等；', '4.本科以上英语、师范或教育专业，至少2年以上全职少儿英语教学经验，英语水平相当于专业4级或以上优先考虑；', '4.对学生的英语学习进展给予专业反馈和建议；', '4.熟练运用办公软件');
INSERT INTO `t_teacher` VALUES ('5', '5.对学生的学习效果进行有效反馈，及时做出教学调整方案；', '5.有团队协作精神，良好的沟通表达能力，有服务意识，进取心，很强的组织协调能力；', '5.负责与老师、学生、家长、主管的全面有效沟通，确保信息统一和客户满意度', null);
INSERT INTO `t_teacher` VALUES ('6', '6.组织试听课、公开课，协助关单、续费等招生活动，与学习顾问协力为学员量身定制学习规划；', '6.可以适应弹性工作时间安排，如周末工作；', '6.协同团队完成每月的销售指标；', null);
INSERT INTO `t_teacher` VALUES ('7', '7.领导交付的其他任务。', '7.有学习钻研与创新意识，积极学习探索国际英语教学及儿童心理学前沿理论知识，并将其运用到工作中；', '7.组织参与市场推广等招生活动', null);
INSERT INTO `t_teacher` VALUES ('8', null, '8.教学水平及课控能力突出，英语教育专业知识丰富，乐于分享', '8.完成上级交付的其它工作任务安排', null);

-- ----------------------------
-- Table structure for `t_webinfo`
-- ----------------------------
DROP TABLE IF EXISTS `t_webinfo`;
CREATE TABLE `t_webinfo` (
  `webinfo_id` int(11) NOT NULL AUTO_INCREMENT,
  `webinfo_tel` varchar(255) DEFAULT NULL,
  `webinfo_mail` varchar(255) DEFAULT NULL,
  `webinfo_website` varchar(255) DEFAULT NULL,
  `webinfo_phone` varchar(255) DEFAULT NULL,
  `webinfo_wechat` varchar(255) DEFAULT NULL,
  `webinfo_addr` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`webinfo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_webinfo
-- ----------------------------
INSERT INTO `t_webinfo` VALUES ('1', '0451-55157643', '09162839876@qq.com', 'www.mcgins.com', '13809764375', '86142083571', '地址要换行');
