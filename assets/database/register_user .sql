

CREATE DATABASE geoAlert;


CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);




INSERT INTO `node_chart_10` (`id`, `nodeId`, `gatewayID`, `model`, `createdTime`, `timeZone`, `dateAndTime`, `temp_10_ch1`, `Aaxis_10_ch1`, `Baxis_10_ch1`, `AaxisVariation_10_ch1`, `BaxisVariation_10_ch1`) VALUES ('1', '10', '20837', 'LS-G6-INC15', '1/11/2020 ', 'Asia/Kuala_Lumpur', '2020-11-18 00:00:00.000000', '28.7', '-0.1628', '-0.3873', '-0.0099', '-0.0517');