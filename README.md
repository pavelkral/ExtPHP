# ExtPHP 

Minimalistic and fast Php and MySql MVC framework using mode rewrite.

## Basic route example
 
  ```shell
  link http://example.com/articles/show/1/true/false/  
  is=> http://example.com/Object/function/param[0]/param[1]/param[n]/
  
  ```

## Route call

  ```shell
  Object = ArticlesPresenter extend ExtPresenter //if not set call default
  his function show(); //if not set call default
  with array of params[0-n]
  ```
  
For more see skeleton example.  











