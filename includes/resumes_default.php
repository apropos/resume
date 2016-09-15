<?php

$contact = (new ResumeSkill('Contact', 1))
  ->withData(new ResumeSkillRecord(['name' => 'FirstName LastName', 'email' => 'email@example.com', 'phone' => '888.555.1212', 'location' => 'Los Angeles, CA 90007, USA']));
$resumes[] = new Resume([$contact]);

$language = (new ResumeSkill('Language', 1))
  ->withData(new ResumeSkillRecord(['name' => 'PHP', 'active' => '1998-now']))
  ->withData(new ResumeSkillRecord(['name' => 'JavaScript', 'active' => '2001-now']))
  ->withData(new ResumeSkillRecord(['name' => 'Perl', 'active' => '1995-2010']))
  ->withData(new ResumeSkillRecord(['name' => 'Java', 'active' => '2013-2014']))
  ->withData(new ResumeSkillRecord(['name' => 'C', 'active' => '1992-1996']));

$os = (new ResumeSkill('OperatingSystem', 1))
  ->withData(new ResumeSkillRecord(['name' => 'Ubuntu', 'active' => '2007-now']))
  ->withData(new ResumeSkillRecord(['name' => 'Centos', 'active' => '2010-now']))
  ->withData(new ResumeSkillRecord(['name' => 'Windows', 'active' => '1989-now']))
  ->withData(new ResumeSkillRecord(['name' => 'OS X', 'active' => '2010-now']))
  ->withData(new ResumeSkillRecord(['name' => 'FreeBSD', 'active' => '1995-2012']));

$vt = (new ResumeSkill('Virtualization', 1))
  ->withData(new ResumeSkillRecord(['name' => 'VirtualBox', 'active' => '2010-now']))
  ->withData(new ResumeSkillRecord(['name' => 'Vagrant', 'active' => '2014-now']))
  ->withData(new ResumeSkillRecord(['name' => 'Docker', 'active' => '2016']));

$service = (new ResumeSkill('WebService', 2))
  ->withData(new ResumeSkillRecord(['name' => 'Apache', 'active' => '1997-now']))
  ->withData(new ResumeSkillRecord(['name' => 'MySQL', 'active' => '1999-now']))
  ->withData(new ResumeSkillRecord(['name' => 'Postfix', 'active' => '2008-now']))
  ->withData(new ResumeSkillRecord(['name' => 'Sendmail' , 'active' => '1995-now']))
  ->withData(new ResumeSkillRecord(['name' => 'nginx', 'active' => '2008-now']))
  ->withData(new ResumeSkillRecord(['name' => 'SIP', 'active' => '2010-now']));

$api = (new ResumeSkill('WebAPI', 2))
  ->withData(new ResumeSkillRecord(['name' => 'Amazon MWS']))
  ->withData(new ResumeSkillRecord(['name' => 'eBay Trading']))
  ->withData(new ResumeSkillRecord(['name' => 'Amazon Login']))
  ->withData(new ResumeSkillRecord(['name' => 'Amazon Payment']))
  ->withData(new ResumeSkillRecord(['name' => 'Visa Checkout Payment']))
  ->withData(new ResumeSkillRecord(['name' => 'Paypal Payment Gateway']))
  ->withData(new ResumeSkillRecord(['name' => 'Authorize.net']))
  ->withData(new ResumeSkillRecord(['name' => 'UPS']))
  ->withData(new ResumeSkillRecord(['name' => 'Stamps.com']));

$tool = (new ResumeSkill('Tool', 3))
  ->withData(new ResumeSkillRecord(['name' => 'VI', 'active' => '1995-now']))
  ->withData(new ResumeSkillRecord(['name' => 'PhpStorm', 'active' => '2014-now']))
  ->withData(new ResumeSkillRecord(['name' => 'git', 'active' => '2014-now']))
  ->withData(new ResumeSkillRecord(['name' => 'Eclipse', 'active' => '2010-2014']));

$db = (new ResumeSkill('DataTool', 3))
  ->withData(new ResumeSkillRecord(['name' => 'MySQL', 'active' => '1998-now']))
  ->withData(new ResumeSkillRecord(['name' => 'SQLite', 'active' => '2012-now']))
  ->withData(new ResumeSkillRecord(['name' =>'JSON' , 'active' => '2012-now']))
  ->withData(new ResumeSkillRecord(['name' => 'XML', 'active' => '2014-now']));

$platform = (new ResumeSkill('Platform', 3))
  ->withData(new ResumeSkillRecord(['name' => 'osCommerce', 'active' => '2001-now']))
  ->withData(new ResumeSkillRecord(['name' => 'Laravel', 'active' => '2014-now']))
  ->withData(new ResumeSkillRecord(['name' => 'Wordpress', 'active' => '2012-now']))
  ->withData(new ResumeSkillRecord(['name' => 'Joomla', 'active' => '2013-now']))
  ->withData(new ResumeSkillRecord(['name' => 'Pligg', 'active' => '2012-2014']))
  ->withData(new ResumeSkillRecord(['name' => 'Zen Cart', 'active' => '2014-now']))
  ->withData(new ResumeSkillRecord(['name' => 'Magento', 'active' => '2014']));

$resumes[] = new Resume([$language, $os, $vt, $service, $api, $tool, $db, $platform]);

$project = new ResumeSkill('Activity', 1);
$project->withData(
  new ResumeSkillRecord(
    ['name' => 'First Company', 'active' => '2003-now', 'LinesOfCode' => '200k+', 'CodeBase' => 'osCommerce']
    , <<<'TAG'
Lura de raptus adgium, imperium luna! Ubi est rusticus amor? <a href="http://www.oscommerce.com">http://www.osCommerce.com</a>
TAG

  )
);
$project->withData(
  new ResumeSkillRecord(
    ['name' => 'Second Company', 'active' => '2013-now', 'LinesOfCode' => '13k+', 'CodeBase' => 'PHP']
    , <<<'TAG'
Germanus, bassus animaliss solite tractare de alter, azureus abactus.
Vortex de bassus lacta, imperium ventus! Pulchritudine de nobilis epos, vitare adiurator.
TAG

  )
);

$resumes[] = new Resume([$project]);