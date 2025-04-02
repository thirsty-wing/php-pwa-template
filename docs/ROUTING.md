# Routing

Routing is path-based. See the router.php file to see how it works. Essentially all the pages are in the routes folder. A directory in the routes folder represents a route. Within that directory there can be files named each of the http methods, IE get.php, post.php, etc. Alternatively, there can be a route.php file which will catch all http methods. The route.php file is useful for forms.

Dynamic routes are specified in the path by using the \_dynamic folder name. For examples, the /users/123 page can be stored as routes/users/\_dynamic/get.php. Dynamic routes must be handled individually in the routes.php file.
