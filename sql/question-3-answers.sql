-- select by id 1:
Select *
From posts
Where id = 1;

-- select all posts where title = includes "title 2":
Select *
From posts
Where title Like '%title 2%';

-- select all posts and order by the title column alphabetically:
Select *
From posts
Order By title;


-- insert 3 new posts
Insert into posts (title, description) values
('New Post 1', 'Description for New Post 1'),
('New Post 2', 'Description for New Post 2'),
('New Post 3', 'Description for New Post 3');


-- update posts where id = 1, set the title to "new title"
Update posts 
Set title = 'new title'
Where id = 1;


-- delete post where id = 2
Delete From posts
Where id = 2;