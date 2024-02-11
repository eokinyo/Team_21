## signUpTable - created by Elly
CREATE TABLE `signUpForm` (
  `id` int NOT NULL,
  `fname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `lname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `occupation` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `consent` varchar(10) NOT NULL
)
## contactMe table - created by Nart
CREATE TABLE `contactMe` (
 `first_name` varchar(50) NOT NULL,
 `last_name` varchar(50) NOT NULL,
 `email` varchar(100) NOT NULL,
 `message` text NOT NULL,
 `id` int NOT NULL AUTO_INCREMENT,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci
## Visit Table - created by Adam
CREATE TABLE TABLE_VISIT (
    visit_id INT AUTO_INCREMENT PRIMARY KEY,
    ip_address VARCHAR(50),
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

## Feedback Table - Created by Dammika

CREATE TABLE `ProjectFeedback_Team21` (
  `FeedbackID` int NOT NULL,
  `ProjectID` int NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;