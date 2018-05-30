package unipotsdam.gf.modules.assessment.controller;

public class Assessment {
    private StudentIdentifier student;
    private GroupIdentifier group;
    private Performance performance;
    private boolean rated;

    public Assessment(StudentIdentifier student, Performance performance, GroupIdentifier group, boolean rated) {
        this.student = student;
        this.performance = performance;
        this.group=group;
        this.rated=rated;
    }

    public boolean isRated() {
        return rated;
    }

    public void setRated(boolean rated){
        this.rated=rated;
    }

    public GroupIdentifier getGroup() {
        return group;
    }

    public void setGroup(GroupIdentifier group) {
        this.group = group;
    }

    public StudentIdentifier getStudent() {
        return student;
    }

    public void setStudent(StudentIdentifier student) {
        this.student = student;
    }

    public Performance getPerformance() {
        return performance;
    }

    public void setPerformance(Performance performance) {
        this.performance = performance;
    }

    @Override
    public String toString() {
        return "Assessment{" +
                "student=" + student +
                ", performance=" + performance +
                '}';
    }
}
