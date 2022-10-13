use std::fs::File;
use std::io::prelude::*;

fn main() -> std::io::Result<()> {


    let mut file = File::open("foo.txt")?;
    let mut contents = String::new();
    file.read_to_string(&mut contents)?;
    assert_eq!(contents, "test");
    
    println!("Hello, world! with contents \"{}\"", contents);
    Ok(())
}
