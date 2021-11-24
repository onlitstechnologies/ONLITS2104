package local.onlits.onlits2104.shakeel;

class GenericsBoxDriver {
    public static void main(String[] args) {
        Float f = 100.9F;
        GenericsBox g = new GenericsBox();
        g.setBox(f);
        System.out.println("The entered value is " + g.getBox());
    }
}