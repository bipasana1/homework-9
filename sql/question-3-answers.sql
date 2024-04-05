-- select by id 1:

    Select * From posts Where id = 1;

-- select all posts where title = includes "title 2":

    SELECT * FROM posts WHERE title LIKE '%title 2%';

-- select all posts and order by the title column alphabetically:

    Select * 
    from posts 
    Order by title ASC;

-- insert 3 new posts

    Insert into posts (title, description) values 
    ('New Post 1', 'New post description 1'),
    ('New Post 2', 'New post description 2'),
    ('New Post 3', 'New post description 3');

-- update posts where id = 1, set the title to "new title"
    UPDATE posts 
    Set title = "new title"
    Where id = 1;
    -- delete post where id = 2

    Delete posts 
    Where id = 2;