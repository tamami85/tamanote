CREATE TABLE `memo`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `title` varchar(256) NOT NULL,
    `contents` text NOT NULL,
    `created` datetime NOT NULL,
    `updated` datetime NOT NULL,
    primary key(id)
);

