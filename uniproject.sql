-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 02:22 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blogid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `decs` text NOT NULL,
  `tozihkotah` text NOT NULL,
  `imageshakhes` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blogid`, `title`, `decs`, `tozihkotah`, `imageshakhes`, `date`) VALUES
(7, 'فردا آخرین مهلت انتخاب رشته کارشناسی ارشد', '<p class=\"rtejustify\">علیرضا کریمیان مشاور رئیس و مدیرکل روابط عمومی سازمان سنجش آموزش کشور در گفت&zwnj;وگو با خبرنگار گروه دانشگاه خبرگزاری فارس، گفت: در آزمون کارشناسی ارشد سال ۱۴۰۲ تعداد ۴۷۱ هزار و ۵۲۸ نفر شرکت کرده اند که از این تعداد ۲۵۵ هزار نفر زن و ۲۱۶ هزار و ۵۲۸ نفر مرد بودند و از مجموع داوطلبان شرکت کننده در آزمون کارشناسی ارشد سال ۱۴۰۲ تعداد ۳۵۵ هزار نفر مجاز به انتخاب رشته شدند.</p>\r\n<p class=\"rtejustify\">وی افزود: نتایج اولیه آزمون کارشناسی ارشد ناپیوسته سال ۱۴۰۲ روز ۸ خردادماه ۱۴۰۲ در سایت سازمان سنجش منتشر شده است و داوطلبانی که براساس کارنامه، مجاز به انتخاب رشته شده&zwnj;اند تا فردا شانزدهم خردادماه مهلت دارند که با مراجعه به سایت سازمان سنجش آموزش کشور برای تکمیل فرم انتخاب رشته اقدام کنند.</p>\r\n<p class=\"rtejustify\">به گفته کریمیان، داوطلبان از <a href=\"https://www.sanjesh.org/fa-IR/Portal/4936/news/view/14591/10565/Staging\">اینجا </a>می&zwnj;توانند دفترچه راهنمای انتخاب رشته را دریافت و به دقت مطالعه کرده و سپس از <a href=\"https://www.sanjesh.org/fa-IR/Portal/4936/news/view/14591/10559/Staging\">اینجا</a> برای انتخاب رشته اقدام کنند.</p>\r\n<p class=\"rtejustify\">آزمون کارشناسی ارشد ناپیوسته در بعدازظهر روز پنجشنبه ۱۱ اسفند ماه و صبح و بعدازظهر روز جمعه ۱۲ اسفندماه سال ۱۴۰۱ برگزار شد.</p>', ' مشاور رئیس و مدیرکل روابط عمومی سازمان سنجش آموزش کشور گفت: داوطلبان مجاز آزمون کارشناسی ارشد تا فردا شانزدهم خردادماه برای انتخاب رشته مهلت دارند. سبسیبیسببسیننسیب', 'images/blog/14020224000621_Test_PhotoN.jpg', '2023-06-06'),
(9, 'موشک «فتاح» امنیت منطقه را ارتقاء داد ', '<p class=\"rtejustify\" style=\"text-align: justify;\">به گزارش خبرنگار سیاسی خبرگزاری فارس، حجت&zwnj;الاسلام محمدجواد حاج&zwnj;علی&zwnj;اکبری خطیب نماز جمعه این هفته تهران در خطبه&zwnj;های این نماز که در محل دانشگاه تهران برگزار شد، اظهار کرد: شخصی نزد پیامبر آمد و گفت هر سال برنامه حج داشتم، ولی امسال توفیق آن نصیب من نشد پیامبر راه را به او نشان داد و به او فرمود نماز جمعه را مگر نمی&zwnj;شناسی، زیرا این حج مساکین امت من است و به نمازگزاران جمعه پاداش حج داده می&zwnj;شود.</p>\r\n<p class=\"rtejustify\" style=\"text-align: justify;\">وی افزود:&nbsp;حال و هوای این روزهای کشور حال و هوای حج است و خدا را شاکریم که نعمت حج را در اختیار ما قرار داده است.</p>\r\n<p class=\"rtejustify\" style=\"text-align: justify;\">خطیب نماز جمعه این هفته تهران تصریح کرد:&nbsp;حضرت علی (ع) در&nbsp;نهج&nbsp;البلاغه&nbsp;می&zwnj;فرمایند: &laquo;سفر زندگی دنیای ما را یادآوری می&zwnj;کند&raquo; و می&zwnj;فرماید: &laquo;برای زیستگاه آخرت توشه برداریم چون ما در سفر هستیم و باید بهترین توشه خود را برای سفر آخرت همراه خود کنیم&raquo;.</p>\r\n<p class=\"rtejustify\" style=\"text-align: justify;\">حجت&zwnj;الاسلام حاج&zwnj;علی&zwnj;اکبری با اشاره به توطئه&zwnj;های دشمنان طی سال&zwnj;های اخیر، به خصوص در اغتشاشات سال گذشته، گفت: ایمان &zwnj;و امید است که امروز بیش از همیشه در معرض آماج حمله دشمنان ایران و اسلام قرار دارد.</p>\r\n<p class=\"rtejustify\" style=\"text-align: justify;\">وی ادامه داد: ضربه&zwnj;هایی که دشمنان خورده&zwnj;اند، از ایمان و امید ملت ایران بوده است.</p>\r\n<p class=\"rtejustify\" style=\"text-align: justify;\">خطیب نماز جمعه این هفته تهران تصریح کرد: اولا بهترین فرصت&zwnj;ها برای توشه&zwnj;برداری، توشه تقوا و موقعیت&zwnj;های خوبی است که در مسیر زندگی&zwnj;مان تعبیه شده است، این ماه ذیقده ماه شیرینی است، ماه حضرت رضا علیه&zwnj;السلام است.</p>\r\n<p class=\"rtejustify\">حجت&zwnj;الاسلام حاج&zwnj;علی&zwnj;اکبری ادامه داد: روزهایی از این ماه باقی مانده است قدر بدانیم. فرصت یکشنبه این ماه برای استغفار را با آن نماز مخصوص قدر&nbsp; بدانیم، فرصت زیارت حضرت علی بن موسی&zwnj;الرضا علیه السلام از دور و نزدیک را قدر بدانیم، روز &laquo;دحوالارض&raquo; را بزرگ بشماریم، چه راز&zwnj;هایی چه زیبایی&zwnj;هایی، روز زمین توجه به ساحت قدسی حضرت بقیه&zwnj;الله الاعظم عجل&zwnj;الله تعالی فرجه الشریف. در آن روز بزرگ ان&zwnj;شاالله از این ظرفیت&zwnj;ها همه ما بهره&zwnj;مند باشیم و از دعا برای حجاج بیت&zwnj;الله&zwnj;الحرام غافل نشویم.</p>\r\n<p class=\"rtejustify\">وی تأکید کرد: انشاالله حجاج ایرانی به نمایندگی از امت اسلامی خوش بدرخشند و سرشار از معنویت از نوع از فتوحات معنوی از مغفرت الهی باشند و پرچم اسلامی و پرچم توحید را برافراشته کنند و پرچم برائت از مشرکین رو ان&zwnj;شاالله امسال همه باشکوهی برگزار بشود، خدای متعال در مناسک&zwnj; و برنامه&zwnj;هایشان یاری و ما را در دعاهای آن&zwnj;ها سهیم کند.</p>\r\n<p class=\"rtejustify\">خطیب نماز جمعه این هفته تهران ادامه داد: یک تشکر جانانه باید بکنیم اتفاق بسیار شیرینی که افتاد باعث چشم روشنی شد و از طرفی هم یک طوفانی از هراس به جان شیاطین افتاد، جدیدترین محصول کارخانه ایمان و امید یعنی این موشک ابرفراصوت فتاح. خدای متعال را شکر و از دانشمندان عزیز و از جوانان مجاهد و رشید نیروی هوافضای سپاه و پر افتخار پاسداران انقلاب اسلامی که بحمدلله چنین چشم روشنی را به امامت امام دادند و دل&zwnj;های مؤمنین&nbsp; را شاد کردند، تشکر می&zwnj;کنیم.</p>\r\n<p class=\"rtejustify\">حجت&zwnj;الاسلام حاج&zwnj;علی&zwnj;اکبری تصریح کرد: رونمایی از موشک فتاح جبهه مقاومت را خوشحال کرد و آمریکایی&zwnj;ها و رژیم پلید صهیونیستی را به هراس انداخت و امنیت منطقه را ارتقاء داد.</p>', 'خطیب نماز جمعه این هفته تهران گفت: رونمایی از موشک فتاح جبهه مقاومت را خوشحال کرد و آمریکایی‌ها و رژیم پلید صهیونیستی را به هراس انداخت و امنیت منطقه را ارتقاء داد. ', 'images/blog/14020319000268_Test_PhotoN.jpg', '2023-06-09'),
(10, 'ریزش ادامه‌دار‌ قیمت انواع سکه و ارز', '<p class=\"rtejustify\">به گزارش خبرنگار اقتصادی خبرگزاری فارس، امروز در مرکز مبادله ارز و طلا قیمت دلار اسکناس 42 هزار و 82 تومان و قیمت دلار حواله 38 هزار و 256 تومان کشف شد.</p>\r\n<p class=\"rtejustify\">همچنین امروز در مرکز مبادله، اسکناس یورو 45 هزار و 31 تومان و اسکناس درهم 11 هزار و 458 تومان کشف قیمت شد.</p>\r\n<p class=\"rtejustify\">در بازار غیررسمی و مقابل صرافی&zwnj;ها نیز دلال&zwnj;ها دلار را با قیمت 48 هزار و 800 تومان خریداری می&zwnj;کردند و با قیمت 49 هزار تومان می&zwnj;فروختند.</p>\r\n<p class=\"rtejustify\"><strong>امروز همچنین در بازار طلا سکه بهار آزادی طرح قدیم 24 میلیون و 901 هزار تومان و سکه طرح جدید 27 میلیون و 948 هزار تومان قیمت&zwnj;گذاری شد، روز گذشته&nbsp;سکه امامی (طرح قدیم) &zwnj; 25 میلیون تومان و سکه تمام بهار آزادی طرح جدید&zwnj; 28 میلیون و 200 هزار تومان معامله شد.</strong></p>\r\n<p class=\"rtejustify\">همچنین امروز نیم سکه 15 میلیون و 670 هزار تومان، ربع سکه 10 میلیون و 440 هزار تومان و سکه گرمی 6 میلیون و 200 هزار تومان دادوستد شد.</p>\r\n<p class=\"rtejustify\">هر گرم طلا امروز 2 میلیون و 340 هزار تومان داد و ستد شد.</p>\r\n<p class=\"rtejustify\">امروز همچنین اونس طلا&nbsp;&nbsp;1946 دلار د 12 سنت بود.</p>\r\n<p class=\"rtejustify\">با توجه به &zwnj;دیپلماسی منطقه&zwnj;ای دولت و گشایش&zwnj;های ارزی، پیش&zwnj;بینی می&zwnj;شود روند کاهش قیمت ارز و طلا در روزهای آینده نیز تسریع شود.</p>', 'امروز و در ادامه ریزش قیمت انواع ارز و طلا، دلار غیررسمی مقابل صرافی‌ها توسط دلالان با قیمت 48800 تومان خریداری و با قیمت 49 هزار تومان فروخته می‌شد. ', 'images/blog/14020210000042_Test_PhotoN.jpg', '2023-06-09'),
(11, 'دربانانِ خانه‌ امام رضا (ع) ', '<p class=\"rtejustify\">خبرگزاری فارس؛ حنان سالمی:&nbsp;تا سال&zwnj;ها فکر می&zwnj;کردم عاشقِ دور ضریح چرخیدن&zwnj;اند، در نزدیک&zwnj;ترین نقطه به کهکشان نور و با همان چوب&zwnj;پرهای سبز لطیف و معروف؛ و اوج دلبری&zwnj;شان هم حتما آنجاست که بزنند روی شانه&zwnj;های من و تو و بگویند حرکت کن و امام رضا (ع) را فقط برای خودشان نگه دارند! اما تو نگو این جماعت دل باخته، برای دربانی خانه&zwnj; محبوب است، که سر و دست می&zwnj;شکنند! و ما از سَر و سِر آن&zwnj;ها هیچ نمی&zwnj;دانیم.</p>\r\n<p class=\"rtejustify\">حق هم داریم. همیشه آن&zwnj;ها را از دور دیده&zwnj;ایم. با لباس&zwnj;هایی ساده و مرتب سورمه&zwnj;ای و محاسنی بلند و نگاه&zwnj;هایی متواضع اما خوش&zwnj;خنده. هر صحن و رواق حرم هم که گم می&zwnj;شدیم خیال&zwnj;مان راحت بود به بودن&zwnj;شان. می&zwnj;دانستیم ایستاده&zwnj;اند تا سراغ هر کجا را بگیریم، با حوصله نشان&zwnj;مان بدهند. اما هیچ&zwnj;کداممان، هیچ&zwnj;وقت، ازشان نپرسید: &laquo;حاج آقا، چرا دربانی؟ هوا گرم و سرد می&zwnj;شود و سن و سالی از شما گذشته!&raquo;</p>\r\n<p class=\"rtejustify\"><span style=\"color: #0000ff;\"><strong>دل به دریا زدن</strong></span></p>\r\n<p class=\"rtejustify\">این بار اما دلِ سر به هوا را به دریا زدم. سالن انتظار فرودگاه خلوت بود. آمده بودند به پیشواز آدم&zwnj;هایی که شاید خیلی از آن&zwnj;ها حتی نیت زیارت را هم نداشتند ولی دربان&zwnj;های خانه&zwnj; امام رضا (ع) خوب بلد بودند چطور دل&zwnj;شان را هوایی کنند.&nbsp; گفتم جلو می&zwnj;روم و این&zwnj;بار به جای آدرس صحن انقلاب و رواق دارالحجه و مسجد بالاسر، سراغ قصه&zwnj;ی دل&zwnj;هایشان را می&zwnj;گیرم اما نم پس نمی&zwnj;دادند.</p>', 'تا سال‌ها فکر می‌کردم عاشقِ دور ضریح چرخیدن‌اند اما تو نگو این جماعت دلباخته، برای دربانی خانه‌ محبوب است، که سر و دست می‌شکنند! و ما از سَر و سِر آن‌ها هیچ نمی‌دانیم. ', 'images/blog/Untitled.jpg', '2023-06-09');

-- --------------------------------------------------------

--
-- Table structure for table `gozareshtasviri`
--

CREATE TABLE `gozareshtasviri` (
  `gtid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `tozihkotah` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `image4` varchar(255) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gozareshtasviri`
--

INSERT INTO `gozareshtasviri` (`gtid`, `title`, `tozihkotah`, `image1`, `image2`, `image3`, `image4`, `date`) VALUES
(11, 'رونمایی از موشک هایپرسونیک «فتاح»', 'ابَر موشک هایپرسونیک «فتاح» جدیدترین دستاورد راهبردی نیروی هوافضای سپاه رونمایی شد.این موشک با قابلیت‌های تاکتیکی، به‌دلیل برخورداری از پیشران سوخت جامد نازل متحرک مرحله دوم، قابلیت دستیابی به سرعت‌های بسیار بالا و همچنین انجام مانورهای مختلف در داخل و خا', 'images/tasviri/14020316000219638216435192924055_10743_PhotoX.jpg', 'images/tasviri/14020316000219638216435197299268_89191_PhotoX.jpg', 'images/tasviri/14020316000306638216471705655066_42267_PhotoX.jpg', 'images/tasviri/14020316000370638216493264870801_23775_PhotoX.jpg', '2023-06-09'),
(12, 'مسابقات بین‌المللی دو و میدانی امام رضا(ع)', 'نخستین روز مسابقات بین‌المللی دو و میدانی جام امام رضا(ع) چهارشنبه ۱۷ خرداد از ساعت ۹ الی ۲۰ در محل مجموعه ورزشی دو و میدانی آفتاب انقلاب برگزار شد.بارش شدید باران برای دقایقی شرایط خاصی را برای شرکت کنندگان حاصل کرد.', 'images/tasviri/14020318000249638218223520209664_23558_PhotoX.jpg', 'images/tasviri/14020318000249638218223541928129_26696_PhotoX.jpg', 'images/tasviri/14020318000249638218223653178219_31105_PhotoX.jpg', 'images/tasviri/287275_138.jpg', '2023-06-09'),
(14, 'پرسش و پاسخ دانشجویان با سخنگوی دولت', 'علی بهادری جهرمی سخنگوی دولت عصر امروز سه شنبه ۱۶ خرداد در نشست پرسش و پاسخ با دانشجویان در دانشکده حقوق و علوم سیاسی دانشگاه تهران حاضر و به سوالات پاسخ داد.', 'images/tasviri/14020316000883638216712838924526_49713_PhotoX.jpg', 'images/tasviri/14020316000883638216712799080559_58076_PhotoX.jpg', 'images/tasviri/14020316000883638216712763612020_55289_PhotoX.jpg', 'images/tasviri/14020316000883638216712750486782_63656_PhotoX.jpg', '2023-06-09');

-- --------------------------------------------------------

--
-- Table structure for table `podcast`
--

CREATE TABLE `podcast` (
  `pid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `tozihat` text NOT NULL,
  `imageshakhes` varchar(255) NOT NULL,
  `music` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `podcast`
--

INSERT INTO `podcast` (`pid`, `title`, `tozihat`, `imageshakhes`, `music`, `date`) VALUES
(11, 'پادکست کربلایی علی پورکاوه', '<p>به مناسبت شهادت امام رضا علیه السلام</p>', 'images/podcast/287275_138.jpg', 'podcast/22.mp3', '2023-06-09'),
(12, 'پادکست کربلایی حدادیان', '<p>پادکست کربلایی محمدحسین حدادیان</p>', 'images/podcast/1642961324158503542615-500x500.jpg', 'podcast/39865حسین-آقام.mp3', '2023-06-09');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slideid` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `pos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slideid`, `image`, `pos`) VALUES
(9, 'images/slider/1686066296404.jpg', 1),
(10, 'images/slider/1679819758544.jpg', 3),
(14, 'images/slider/1684079093644.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `role`, `firstname`, `lastname`, `phonenumber`) VALUES
(2, 'hajamir', '213135', 1, 'امیرحسین', 'مشایخی', '09303082160'),
(5, 'alireza', 'Aa123456', 0, 'علیرضا خان', 'خسرو آبادی', '09109911120'),
(6, 'ahmad', 'Aa123456', 0, 'احمد', 'سلیمانی', '09109920302');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blogid`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `gozareshtasviri`
--
ALTER TABLE `gozareshtasviri`
  ADD PRIMARY KEY (`gtid`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `podcast`
--
ALTER TABLE `podcast`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slideid`),
  ADD UNIQUE KEY `pos` (`pos`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blogid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `gozareshtasviri`
--
ALTER TABLE `gozareshtasviri`
  MODIFY `gtid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `podcast`
--
ALTER TABLE `podcast`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slideid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
