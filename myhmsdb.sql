
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET AUTOCOMMIT = 0;

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;

--
-- Database: `myhmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
    `username` varchar(50) NOT NULL,
    `password` varchar(30) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

INSERT INTO
    `admintable` (`username`, `password`)
VALUES ('admin', 'admin123');

CREATE TABLE `appointment` (
    `pid` int(11) NOT NULL,
    `ID` int(11) NOT NULL PRIMARY KEY,
    `fname` varchar(20) NOT NULL,
    `lname` varchar(20) NOT NULL,
    `gender` varchar(10) NOT NULL,
    `email` varchar(30) NOT NULL,
    `contact` varchar(10) NOT NULL,
    `doctor` varchar(30) NOT NULL,
    `docFees` int(5) NOT NULL,
    `appdate` date NOT NULL,
    `apptime` time NOT NULL,
    `userStatus` int(5) NOT NULL,
    `doctorStatus` int(5) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = latin1;


INSERT INTO
    `appointment` (
        `pid`,
        `ID`,
        `fname`,
        `lname`,
        `gender`,
        `email`,
        `contact`,
        `doctor`,
        `docFees`,
        `appdate`,
        `apptime`,
        `userStatus`,
        `doctorStatus`
    )
VALUES (
        1,
        101,
        'John',
        'Doe',
        'Male',
        'john.doe@example.com',
        '1234567890',
        'Dr. Smith',
        500,
        '2024-11-20',
        '10:30:00',
        1,
        1
    ),
    (
        2,
        102,
        'Jane',
        'Smith',
        'Female',
        'jane.smith@example.com',
        '1234567891',
        'ashok',
        400,
        '2024-11-21',
        '11:00:00',
        1,
        1
    ),
    (
        3,
        103,
        'Alice',
        'Johnson',
        'Female',
        'alice.johnson@example.com',
        '1234567892',
        'arun',
        450,
        '2024-11-22',
        '09:30:00',
        1,
        0
    ),
    (
        4,
        104,
        'Robert',
        'Brown',
        'Male',
        'robert.brown@example.com',
        '1234567893',
        'Dr. Taylor',
        600,
        '2024-11-23',
        '14:00:00',
        0,
        1
    ),
    (
        5,
        105,
        'Emily',
        'Davis',
        'Female',
        'emily.davis@example.com',
        '1234567894',
        'Dr. Wilson',
        550,
        '2024-11-24',
        '15:00:00',
        1,
        1
    ),
    (
        6,
        106,
        'Michael',
        'Miller',
        'Male',
        'michael.miller@example.com',
        '1234567895',
        'dinesh',
        300,
        '2024-11-25',
        '16:30:00',
        1,
        1
    ),
    (
        7,
        107,
        'Laura',
        'Moore',
        'Female',
        'laura.moore@example.com',
        '1234567896',
        'kumar',
        700,
        '2024-11-26',
        '08:30:00',
        1,
        1
    ),
    (
        8,
        108,
        'David',
        'Taylor',
        'Male',
        'david.taylor@example.com',
        '1234567897',
        'Ganesh',
        400,
        '2024-11-27',
        '13:00:00',
        0,
        1
    ),
    (
        9,
        109,
        'Sophia',
        'Anderson',
        'Female',
        'sophia.anderson@example.com',
        '1234567898',
        'Amit',
        450,
        '2024-11-28',
        '12:00:00',
        1,
        0
    );
    -- --------------------------------------------------------
    --
    -- Table structure for table `contact`
    --

CREATE TABLE `contact` (
    `ID` INT PRIMARY KEY AUTO_INCREMENT,
    `name` varchar(30) NOT NULL,
    `email` text NOT NULL,
    `contact` varchar(10) NOT NULL,
    `message` varchar(200) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO
    `contact` (
        `name`,
        `email`,
        `contact`,
        `message`
    )
VALUES (
        'Anu',
        'anu@gmail.com',
        '7896677554',
        'Hey Admin'
    ),
    (
        ' Viki',
        'viki@gmail.com',
        '9899778865',
        'Good Job, Pal'
    ),
    (
        'Ananya',
        'ananya@gmail.com',
        '9997888879',
        'How can I reach you?'
    ),
    (
        'Aakash',
        'aakash@gmail.com',
        '8788979967',
        'Love your site'
    ),
    (
        'Mani',
        'mani@gmail.com',
        '8977768978',
        'Want some coffee?'
    ),
    (
        'Karthick',
        'karthi@gmail.com',
        '9898989898',
        'Good service'
    ),
    (
        'Abbis',
        'abbis@gmail.com',
        '8979776868',
        'Love your service'
    ),
    (
        'Asiq',
        'asiq@gmail.com',
        '9087897564',
        'Love your service. Thank you!'
    ),
    (
        'Jane',
        'jane@gmail.com',
        '7869869757',
        'I love your service!'
    );

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
    `username` varchar(50) NOT NULL,
    `password` varchar(50) NOT NULL,
    `email` varchar(50) NOT NULL,
    `spec` varchar(50) NOT NULL,
    `docFees` int(10) NOT NULL,
    address varchar(50) NOT NULL,
    phone varchar(10) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO
    `doctor` (
        `username`,
        `password`,
        `email`,
        `spec`,
        `docFees`,
        `address`,
        `phone`
    )
VALUES (
        'ashok',
        'ashok123',
        'ashok@gmail.com',
        'General',
        500,
        'Room No. 012 Mini Campus NIT, Delhi',
        '9876543210'
    ),
    (
        'arun',
        'arun123',
        'arun@gmail.com',
        'Cardiologist',
        600,
        'Room No. 012 Mini Campus NIT, Delhi',
        '9876543210'
    ),
    (
        'Dinesh',
        'dinesh123',
        'dinesh@gmail.com',
        'General',
        700,
        'Room No. 012 Mini Campus NIT, Delhi',
        '9876543210'
    ),
    (
        'Ganesh',
        'ganesh123',
        'ganesh@gmail.com',
        'Pediatrician',
        550,
        'Room No. 012 Mini Campus NIT, Delhi',
        '9876543210'
    ),
    (
        'Kumar',
        'kumar123',
        'kumar@gmail.com',
        'Pediatrician',
        800,
        'Room No. 012 Mini Campus NIT, Delhi',
        '9876543210'
    ),
    (
        'Amit',
        'amit123',
        'amit@gmail.com',
        'Cardiologist',
        1000,
        'Room No. 012 Mini Campus NIT, Delhi',
        '9876543210'
    ),
    (
        'Abbis',
        'abbis123',
        'abbis@gmail.com',
        'Neurologist',
        1500,
        'Room No. 012 Mini Campus NIT, Delhi',
        '9876543210'
    ),
    (
        'Tiwary',
        'tiwary123',
        'tiwary@gmail.com',
        'Pediatrician',
        450,
        'Room No. 012 Mini Campus NIT, Delhi',
        '9876543210'
    );

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
    `pid` int(11) NOT NULL,
    `fname` varchar(20) NOT NULL,
    `lname` varchar(20) NOT NULL,
    `gender` varchar(10) NOT NULL,
    `email` varchar(30) NOT NULL,
    `contact` varchar(10) NOT NULL,
    `password` varchar(30) NOT NULL,
    `cpassword` varchar(30) NOT NULL,
    `dob` date NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO
    `patient` (
        `pid`,
        `fname`,
        `lname`,
        `gender`,
        `email`,
        `contact`,
        `password`,
        `cpassword`,
        `dob`
    )
VALUES (
        1,
        'Ram',
        'Kumar',
        'Male',
        'ram@gmail.com',
        '9876543210',
        'ram123',
        'ram123',
        '1995-11-17'
    ),
    (
        2,
        'Alia',
        'Bhatt',
        'Female',
        'alia@gmail.com',
        '8976897689',
        'alia123',
        'alia123',
        '1996-11-17'
    ),
    (
        3,
        'Shahrukh',
        'khan',
        'Male',
        'shahrukh@gmail.com',
        '8976898463',
        'shahrukh123',
        'shahrukh123',
        '1997-11-17'
    ),
    (
        4,
        'Kishan',
        'Lal',
        'Male',
        'kishansmart0@gmail.com',
        '8838489464',
        'kishan123',
        'kishan123',
        '1998-11-17'
    ),
    (
        5,
        'Gautam',
        'Shankararam',
        'Male',
        'gautam@gmail.com',
        '9070897653',
        'gautam123',
        'gautam123',
        '1999-11-17'
    ),
    (
        6,
        'Sushant',
        'Singh',
        'Male',
        'sushant@gmail.com',
        '9059986865',
        'sushant123',
        'sushant123',
        '2000-11-17'
    ),
    (
        7,
        'Nancy',
        'Deborah',
        'Female',
        'nancy@gmail.com',
        '9128972454',
        'nancy123',
        'nancy123',
        '2001-11-17'
    ),
    (
        8,
        'Kenny',
        'Sebastian',
        'Male',
        'kenny@gmail.com',
        '9809879868',
        'kenny123',
        'kenny123',
        '2002-11-17'
    ),
    (
        9,
        'William',
        'Blake',
        'Male',
        'william@gmail.com',
        '8683619153',
        'william123',
        'william123',
        '2003-11-17'
    ),
    (
        10,
        'Peter',
        'Norvig',
        'Male',
        'peter@gmail.com',
        '9609362815',
        'peter123',
        'peter123',
        '2004-11-17'
    ),
    (
        11,
        'Shraddha',
        'Kapoor',
        'Female',
        'shraddha@gmail.com',
        '9768946252',
        'shraddha123',
        'shraddha123',
        '2005-11-17'
    );

--

CREATE TABLE `prescriptions` (
    `doctor` varchar(50) NOT NULL,
    `pid` int(11) NOT NULL,
    `ID` int(11) NOT NULL,
    `fname` varchar(50) NOT NULL,
    `lname` varchar(50) NOT NULL,
    `appdate` date NOT NULL,
    `apptime` time NOT NULL,
    `disease` varchar(250) NOT NULL,
    `allergy` varchar(250) NOT NULL,
    `prescription` varchar(1000) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO
    `prescriptions` (
        `doctor`,
        `pid`,
        `ID`,
        `fname`,
        `lname`,
        `appdate`,
        `apptime`,
        `disease`,
        `allergy`,
        `prescription`
    )
VALUES (
        'Dinesh',
        4,
        11,
        'Kishan',
        'Lal',
        '2024-11-17',
        '15:00:00',
        'Cough',
        'Nothing',
        'Just take a teaspoon of Benadryl every night'
    ),
    (
        'Ganesh',
        2,
        8,
        'Alia',
        'Bhatt',
        '2024-11-17',
        '10:00:00',
        'Severe Fever',
        'Nothing',
        'Take bed rest'
    ),
    (
        'Kumar',
        9,
        12,
        'William',
        'Blake',
        '2024-11-17',
        '12:00:00',
        'Sever fever',
        'nothing',
        'Paracetamol -> 1 every morning and night'
    ),
    (
        'Tiwary',
        9,
        13,
        'William',
        'Blake',
        '2024-11-17',
        '14:00:00',
        'Cough',
        'Skin dryness',
        'Intake fruits with more water content'
    );

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--

--
-- Indexes for table `patient`
--
ALTER TABLE `patient` ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 14;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 12;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;
CREATE TABLE Weight (
    PID INT,
    Weight float(2),
    Date date,
    time TIME
);

ALTER Table Weight
ADD PRIMARY KEY (PID, Date, time);